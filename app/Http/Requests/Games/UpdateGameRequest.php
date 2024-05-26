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
            'game_type' => 'sometimes|required|string|max:255',
            'number_of_player' => 'sometimes|required|string',
            'Rules' => 'sometimes|required|string',
            'description' => 'sometimes|required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'sometimes|required|in:active,inactive', // Assuming 'status' should be one of these values
        ];
    }
}
