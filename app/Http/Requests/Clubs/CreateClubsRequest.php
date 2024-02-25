<?php
namespace App\Http\Requests\Clubs;

use Illuminate\Foundation\Http\FormRequest;

class CreateClubsRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
{
    return [
        'club_name' => 'required|string',
        'club_manager_id' => 'required|string',
        'coach_name_id' => 'nullable|string',
        'contact_information' => 'required|string',
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

