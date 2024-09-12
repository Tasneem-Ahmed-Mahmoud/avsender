<?php

namespace App\Http\Requests\Admin\Feature;

use Illuminate\Foundation\Http\FormRequest;

class FeatureRequest extends FormRequest
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
        $rules=[
         "title.en"=>"required|max:255",
         "title.ar"=>"required|max:255",
         "description.en"=>"required|max:255",
         "description.ar"=>"required|max:255",
         "content.en"=>"required|max:100000",
         "content.ar"=>"required|max:100000",
         "photo"=>"required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:20480",
         "banner"=>"required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:20480",
         'meta_title' => ['nullable', 'max:200'],
         'meta_keywords' => ['nullable', 'max:200'],
         'meta_description' => ['nullable', 'max:1000'],
         'meta_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,webp|max:20480',

        ];
        if(request()->isMethod('PUT') || request()->isMethod('PATCH')){
            
            $rules['photo'] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:20480';
            $rules['banner'] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:20480';

        }

        return  $rules;
    }
}
