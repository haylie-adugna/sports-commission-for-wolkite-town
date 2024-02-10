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
        'photo' => 'nullable|string',
        'video' => 'nullable|string', // Adjust the validation rule for video based on your requirements
        'Created_by' => 'nullable|user_type',
        'status' => 'nullable|in:active,inactive', // Adjust the valid statuses based on your requirements
        'remember_token' => 'nullable|string',
    ];
}

}