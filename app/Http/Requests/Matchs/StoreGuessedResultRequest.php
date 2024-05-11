<?php

namespace App\Http\Requests\Matchs;

use Illuminate\Foundation\Http\FormRequest;

class StoreGuessedResultRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            'team1_goals' => 'required|integer|min:0',
            'team2_goals' => 'required|integer|min:0',
        ];
    }
}
