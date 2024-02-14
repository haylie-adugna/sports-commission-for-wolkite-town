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
        'Name' => 'required|string|max:255',
        'description' => 'required|string',
        'game_category' => 'required|string|max:255',
        'rules' => 'required|string',
        'duration' => 'required|string|max:255',
        'player' => 'required|string|max:255',
        'venue' => 'required|string|max:255',
        'equipment' => 'required|string',
        'season' => 'required|string|max:255',
        'governing_body' => 'required|string|max:255',
    ];
}

}
