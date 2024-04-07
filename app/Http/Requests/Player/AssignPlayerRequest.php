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
        'user_id' => 'nullable|string',
    ];
}

}

