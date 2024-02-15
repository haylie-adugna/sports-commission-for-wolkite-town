<?php

namespace App\Http\Requests\Matchs;

use Illuminate\Foundation\Http\FormRequest;

class CreateMatchRecoredRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            'team1' => 'required|string',
            'team2' => 'required|string',
            'result' => 'required|string',
            'team1_goals' => 'required|integer|min:0',
            'team2_goals' => 'required|integer|min:0',
            'team1_players.*.name' => 'required|string',
            'team1_players.*.assistant' => 'nullable|string',
            'team1_players.*.time' => 'required|integer|min:0',
            'team2_players.*.name' => 'required|string',
            'team2_players.*.assistant' => 'nullable|string',
            'team2_players.*.time' => 'required|integer|min:0',
        ];
    }
}
