<?php

namespace App\Http\Requests\Admin\Feature;

use Illuminate\Foundation\Http\FormRequest;

class FeatureServiceRequest extends FormRequest
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

        $rule=[
            "description.en" => "required|max:255",
            "description.ar" => "required|max:255",
        ];

        if(request()->isMethod('PUT') || request()->isMethod('PATCH')){
            $rule['photo'] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20480';

        }
        return $rule;
    }
}
