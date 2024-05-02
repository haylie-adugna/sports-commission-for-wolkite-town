<?php

namespace App\Http\Requests\matchsrecored;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMatchRecoredRequest extends FormRequest
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
            'player_id' => 'required|string',
            'action' => 'required|string',
        ];
    }
}
