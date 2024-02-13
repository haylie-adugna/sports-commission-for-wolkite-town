<?php

namespace App\Http\Requests\matchs;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMatchsRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            'Team1' => 'required|string',
            'Team2' => 'required|string',
            'Referee' => 'nullable|string',
            'Assistant_Referee1' => 'nullable|string',
            'Assistant_Referee2' => 'nullable|string',
            'Start_time' => 'required|date',
            'End_time' => 'nullable|date',
            'Venue' => 'nullable|string',
            'Medical_Support' => 'nullable|string',
            'Commentator' => 'nullable|string',
            'Promoter' => 'nullable|string',
            'Ticket' => 'nullable|string',
            'Recored_Keeping' => 'nullable|string',
            // Add more validation rules as needed
        ];
    }
}
