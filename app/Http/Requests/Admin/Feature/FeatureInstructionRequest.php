<?php

namespace App\Http\Requests\Admin\Feature;

use Illuminate\Foundation\Http\FormRequest;

class FeatureInstructionRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {

        $rule=[
            "instruction.en" => "required|max:255",
            "instruction.ar" => "required|max:255",
            "photo"=>"required|image|mimes:jpeg,png,jpg,gif,svg|max:20480",
            
        ];

        if(request()->isMethod('PUT') || request()->isMethod('PATCH')){
            $rule['photo'] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20480';

        }
        return $rule;
    }

    }