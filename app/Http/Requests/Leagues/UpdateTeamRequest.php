<?php

namespace App\Http\Requests\Leagues;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    public function prepareForValidation()
    {
        $this->merge([
            'total_played' => $this->total_win + $this->total_draw + $this->total_lost
        ]);
    }

    public function rules()
    {

        return [
            'total_win' => ['required','integer', 'between:0,6'],
            'total_draw' => ['required','integer', 'between:0,6'],
            'total_lost' => ['required','integer', 'between:0,6'],
            'total_goal' => ['required', 'integer'],
            'total_goal_against' => ['required', 'integer'],
            'total_played' => ['required','integer' ,'between:0,6']
        ];
    }
}
