<?php

namespace App\Http\Controllers\Course;

use App\Models\Course;
use Illuminate\Support\Str;
use Yajra\DataTables\Html\Builder;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\CourseStoreRequest;
use App\Http\Requests\CourseUpdateRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index(Builder $builder)
    {
        if (request()->ajax()) {
            $data = Course::with('course_category')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', 'course.includes.actions')
                ->toJson();
        }
        $html = $builder
            ->columns([
                ['data' => 'DT_RowIndex', 'name' => 'id', 'title' => '#'],
                ['data' => 'course_category.course_category', 'name' => 'Kategori', 'title' => 'Kategori'],
                ['data' => 'slug', 'name' => 'slug', 'title' => 'Slug'],
                ['data' => 'title', 'name' => 'Title', 'title' => 'Title'],
                ['data' => 'created_at', 'name' => 'created_at', 'title' => 'Created At'],
                ['data' => 'updated_at', 'name' => 'updated_at', 'title' => 'Updated At'],
                ['data' => 'action', 'name' => 'action', 'title' => 'Action', 'orderable' => false, 'searchable' => false],
            ])
            ->parameters([
                'dom' => 'Bfrtip',
                'buttons' => [
                    [
                        'extend' => 'print',
                        'exportOptions' => [
                            'columns' => [0, 1, 2, 3, 4],
                        ],
                        'className' => 'btn btn-warning btn-sm',
                    ],
                    [
                        'extend' => 'excel',
                        'exportOptions' => [
                            'columns' => [0, 1, 2, 3, 4],
                        ],
                        'className' => 'btn btn-success btn-sm',
                    ],
                    [
                        'extend' => 'pdf',
                        'exportOptions' => [
                            'columns' => [0, 1, 2, 3, 4],
                        ],
                        'className' => 'btn btn-info btn-sm',
                    ],
                ],
            ])
            ->responsive(true)
            ->minifiedAjax();

        return view('course.index', compact('html'));
    }

    public function store(CourseStoreRequest $request)
    {
        try {
            DB::beginTransaction();
            $validate = $request->validated();
            $validate['thumbnail'] = request()->file('thumbnail')->store('uploads/course/thumbnail', 'public');
            $validate['slug'] = Str::slug($request->title);
            $validate['course-trixFields'] = request('course-trixFields');
            $validate['attachment-course-trixFields'] = request('attachment-course-trixFields');
            Course::create([
                'course_category_id' => $validate['course_category_id'],
                'title' => $validate['title'],
                'slug' => $validate['slug'],
                'type' => $validate['type'],
                'price' => $validate['price'],
                'thumbnail' => $validate['thumbnail'],
                'course-trixFields' => $validate['course-trixFields'],
                'attachment-course-trixFields' => $validate['attachment-course-trixFields'],
            ]);
            DB::commit();
            toast('Course Category has been created!', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            dd($th->getMessage());
            DB::rollback();
            toast('Course Category failed to create!', 'error');
            return redirect()->back();
        }
    }

    public function update(Course $course_category, CourseUpdateRequest $request)
    {
        try {
            if ($request->hasFile('thumbnail')) {
                $request->validate([
                    'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $course_category->thumbnail = request()->file('thumbnail')->store('uploads/course/thumbnail', 'public');
            }
            $validate = $request->validated();
            $course_category->update($validate);

            toast('Course Category has been updated!', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            toast('Course Category failed to update!', 'error');
            return redirect()->back();
        }
    }

    public function destroy(Course $course)
    {
        try {
            $filename = $course->thumbnail;
            $course->delete();
            Storage::disk('public')->delete($filename);
            toast('Course Category has been deleted!', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            toast('Course Category failed to delete!', 'error');
            return redirect()->back();
        }
    }
}
