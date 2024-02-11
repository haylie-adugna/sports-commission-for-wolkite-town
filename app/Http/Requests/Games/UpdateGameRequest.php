<?php

namespace App\Http\Requests\Games;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGameRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'Name' => 'sometimes|required|string|max:255',
            'Rules' => 'sometimes|required|string',
            'Equipment' => 'sometimes|required|string',
            'Duration' => 'sometimes|required|string',
            'Venue' => 'sometimes|required|string|max:255',
            'Season' => 'sometimes|required|string|max:255',
            'Governing_Body' => 'sometimes|required|string|max:255',
            'status' => 'sometimes|required|in:active,inactive', // Assuming 'status' should be one of these values
        ];
    }
}
