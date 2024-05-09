<?php
namespace App\Http\Requests\Games;

use Illuminate\Foundation\Http\FormRequest;

class CreateGamesRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
{
    return [
        'game_type' => 'required|string|max:255|unique:games,game_type',
        'description' => 'required|string',
        'game_category' => 'required|string|max:255',
        'rules' => 'required|string',
        'start_date' => 'required|date',
        'end_date' => 'required|date',
        'number_of_player' => 'required|integer',
        'equipment' => 'required|string',
        'governing_body' => 'required|string|max:255',
    ];

}

}
