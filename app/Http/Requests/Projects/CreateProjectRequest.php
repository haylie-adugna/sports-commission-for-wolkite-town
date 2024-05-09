<?php
namespace App\Http\Requests\Projects;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
{
    return [
        'project_name' => 'required|string',
        'project_manager_id' => 'required|string|unique:projects,project_manager_id',
        'coach_name_id' => 'nullable|string|unique:projects,coach_name_id',
        'contact_information' => 'required|string|unique:projects,contact_information',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        'social_media_link' => 'nullable|string',
        'Location' => 'nullable|string', // Changed from 'location' to 'Location' to match the form
        'game_type_id' => 'nullable|string', // Adjusted from 'game_category' to 'game_type_id'
        'document' => 'nullable|mimes:pdf,doc,docx,txt', // Adjusted from 'document' to match the form
        'description' => 'nullable|string',
        'status' => 'nullable|in:active,inactive',
    ];
}

}

