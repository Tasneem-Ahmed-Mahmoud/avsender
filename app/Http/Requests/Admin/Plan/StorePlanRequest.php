<?php

namespace App\Http\Requests\Admin\Plan;

use Illuminate\Foundation\Http\FormRequest;

class StorePlanRequest extends FormRequest
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
            'price' => 'required|numeric|min:0',
            'is_featured' => 'nullable',
            'is_recommended' => 'nullable',
            'is_trial' => 'nullable',
            'is_popular' => 'nullable',
            'status' => 'nullable',
            'days' => 'required|integer|in:30,365',
            'trial_days' => 'nullable|integer|min:0',
            'icon' => 'required|mimes:jpeg,png,jpg,gif,svg|max:20480',
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'business_size.en' => 'required|string|max:255',
            'business_size.ar' => 'required|string|max:255',
            'description.en' => 'required|string',
            'description.ar' => 'required|string',
            'limits.messages_limit' => 'required|string|max:255',
            'limits.contact_limit' => 'required|string|max:255',
            'limits.device_limit' => 'required|string|max:255',
            'limits.template_limit' => 'required|string|max:255',
            'limits.apps_limit' => 'required|string|max:255',
            'limits.chatbot' => 'nullable',
            'limits.bulk_message' => 'nullable',
            'limits.schedule_message' => 'nullable',
            'limits.access_chat_list' => 'nullable',
            'limits.access_group_list' => 'nullable',
        ];

        if ($this->input('is_trial')) {
            $rules['trial_days'] = 'required|integer|min:0';
        }

        return $rules;
    }
}
