<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\CategoryStoreRequest;
use App\Http\Requests\Course\CategoryUpdateRequest;
use App\Models\CourseCategory;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Html\Builder;

class CategoryController extends Controller
{
    public function index(Builder $builder)
    {
        if (request()->ajax()) {
            return DataTables::of(CourseCategory::query())
                ->addIndexColumn()
                ->addColumn('action', 'course_category.includes.actions')
                ->toJson();
        }
        $html = $builder
            ->columns([
                ['data' => 'DT_RowIndex', 'name' => 'id', 'title' => '#'],
                ['data' => 'slug', 'name' => 'slug', 'title' => 'Slug'],
                ['data' => 'course_category', 'name' => 'course_category', 'title' => 'Name'],
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

        return view('course_category.index', compact('html'));
    }

    public function store(CategoryStoreRequest $request)
    {
        try {
            CourseCategory::create($request->all());

            return redirect()->back()->with('success', 'Course Category Created');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Course Category Failed to Create');
        }
    }

    public function update(CourseCategory $course_category, CategoryUpdateRequest $request)
    {
        try {
            $course_category->update($request->all());

            return redirect()->back()->with('success', 'Course Category Updated');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Course Category Failed to Update');
        }
    }

    public function destroy(CourseCategory $course_category)
    {
        try {
            $course_category->delete();

            return redirect()->back()->with('success', 'Course Category Deleted');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Course Category Failed to Delete');
        }
    }
}
