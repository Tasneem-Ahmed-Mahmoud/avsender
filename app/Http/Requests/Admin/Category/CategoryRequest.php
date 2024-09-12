<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
           "title.en"=>['required','max:255',Rule::unique('categories','title->en')->ignore($this->category)],
           "title.ar"=>['required','max:255',Rule::unique('categories','title->ar')->ignore($this->category)],
           'status'=>"nullable"
        ];
    }
}
