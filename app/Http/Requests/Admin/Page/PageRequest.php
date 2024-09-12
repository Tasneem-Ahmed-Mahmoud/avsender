<?php

namespace App\Http\Requests\Admin\Page;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        $rules = [
            'title.en' => ['required', 'string', 'max:150'],
            'title.ar' => ['required', 'string', 'max:150'],
            'content.en' => ['required', 'string', 'max:10000000'],
            'content.ar' => ['required', 'string', 'max:10000000'],
            "type"=>"required|string|max:200|unique:pages,type,".$this->page,
            "status"=>"nullable",
            'meta_title' => ['required', 'max:200'],
            'meta_keywords' => ['required', 'max:200'],
            'meta_description' => ['required', 'max:1000'],
            'meta_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:20480',

        ];
    
        return $rules;
    }
}
