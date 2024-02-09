<?php
namespace App\Http\Requests\Events;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'type' => 'required',
            'body' => 'required',
            'image' => 'required|mimes:jpeg,png,mp4|max:20480',
        ];
    }
}
