<?php

namespace App\Http\Requests\matchsrecored;

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
            'match_id' => 'required|string',
            'team1_goal' => 'required|integer|min:0',
            'team2_goal' => 'required|integer|min:0',
            'team1_player' => 'required|string',
            'team2_player' => 'nullable|string',
            'team1_assistant' => 'required|string',
            'team2_assistant' => 'required|string',
            'team1_time' => 'required|date',
            'team2_time' => 'required|date',
        ];
    }
}
