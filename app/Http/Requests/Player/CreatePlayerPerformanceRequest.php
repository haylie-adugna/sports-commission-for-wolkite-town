<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayerPerformanceRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            'player_id' => 'required|integer',
            'league_id' => 'required|integer',
            'goals' => 'required|integer|min:0',
            'assists' => 'required|integer|min:0',
            'minutes_played' => 'nullable|integer|min:0',
            'yellow_cards' => 'nullable|integer|min:0',
            'red_cards' => 'nullable|integer|min:0',
        ];
    }
}
