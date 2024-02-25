<?php
namespace App\Http\Requests\Events;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
{
    return [
        'Tittle' => 'nullable|string',
        'Type' => 'nullable|string',
        'Body' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif', // Adjust the image types based on your requirements
        'video' => 'nullable|mimes:mp4,ogx,oga,ogv,ogg,webm|max:50000',
        'Created_by' => 'nullable|your_custom_user_type_rule', // Replace with your specific user type rule
        'status' => 'nullable|in:active,inactive', // Adjust the valid statuses based on your requirements
        'remember_token' => 'nullable|string',
    ];
}

}
