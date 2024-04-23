<?php

namespace App\Http\Requests\Projects;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            'project_name' => 'required|string',
            'project_manager_id' => 'required|string',
            'coach_name_id' => 'nullable|string',
            'contact_information' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'social_media_link' => 'nullable|string',
            'location' => 'nullable|string',
            'game_category' => 'nullable|string',
            'document' => 'nullable|string',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ];
    }
}
