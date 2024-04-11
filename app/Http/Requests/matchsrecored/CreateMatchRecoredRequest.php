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
            'club_id'=> 'required|string',
            'number_of_goal' => 'required|integer|min:0',
            'goal_scorer' => 'required|string',
            'goal_assistant' => 'required|string',
        ];
    }
}
