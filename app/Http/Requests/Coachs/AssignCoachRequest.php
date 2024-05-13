<?php
namespace App\Http\Requests\Coachs;

use Illuminate\Foundation\Http\FormRequest;

class AssignCoachRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            'club_id' => 'required|string',
            'user_id' => 'nullable|string|unique:Coachs,user_id', // Ensure user_id is unique in Coachs table
        ];
    }

    public function messages()
    {
        return [
            'user_id.unique' => 'The selected Coachs is already assigned to a club.', // Custom error message for validation
        ];
    }
}

