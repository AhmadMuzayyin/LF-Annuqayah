<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class CourseStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'course_category_id' => 'exists:course_categories,id',
            'title' => 'required|min:5|max:100',
            'thumbnail' => 'required|mimes:png,jpg|max:5000',
            'type' => 'required|in:Online,Offline',
            'price' => 'required|numeric',
        ];
    }
}
