<?php

namespace App\Http\Requests\Admin\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
        $rules = [
            'title.en' => ['required', 'string', 'max:150'],
            'title.ar' => ['required', 'string', 'max:150'],
            'description.en' => ['required', 'string', 'max:1000'],
            'description.ar' => ['required', 'string', 'max:1000'],
            'content.en' => ['required', 'string', 'max:10000000'],
            'content.ar' => ['required', 'string', 'max:10000000'],
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:20480',
            'meta_title' => ['required', 'max:200'],
            'meta_keywords' => ['required', 'max:200'],
            'meta_description' => ['required', 'max:1000'],
            'meta_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:20480',
            'categories' => ['required', 'array'],
            'categories.*' => ['required', 'exists:categories,id'], 
            'tags' => ['required', 'array'],
            'tags.*' => ['required', 'exists:tags,id'], 
        ];
    
        if ($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            $rules['photo'] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:20480';
            $rules['meta_image'] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:20480';
        }
    
        return $rules;
    }
    
}
