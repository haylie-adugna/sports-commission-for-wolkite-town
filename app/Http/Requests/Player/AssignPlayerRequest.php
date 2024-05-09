<?php
namespace App\Http\Requests\Player;

use Illuminate\Foundation\Http\FormRequest;

class AssignPlayerRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            'club_id' => 'required|string',
            'user_id' => 'nullable|string|unique:players,user_id', // Ensure user_id is unique in players table
        ];
    }

    public function messages()
    {
        return [
            'user_id.unique' => 'The selected player is already assigned to a club.', // Custom error message for validation
        ];
    }
}

