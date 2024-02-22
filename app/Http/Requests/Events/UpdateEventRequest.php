<?php

namespace App\Http\Requests\Events;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'Tittle' => 'nullable|string',
            'Type' => 'nullable|string',
            'Body' => 'nullable|string',
            'photo' => 'nullable|string',
            'video' => 'nullable|string',
            'status' => 'nullable|in:active,inactive',
        ];
    }
}
