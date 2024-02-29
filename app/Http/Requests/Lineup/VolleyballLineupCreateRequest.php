<?php

namespace App\Http\Requests\Lineup;

use Illuminate\Foundation\Http\FormRequest;

class VolleyballLineupCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // You can customize the authorization logic if needed
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [];

        // Validation rules for main squad players
        for ($i = 1; $i <= 11; $i++) {
            $rules["jerseyNumber{$i}"] = 'required|numeric';
            $rules["playerName{$i}"] = 'required|string';
            $rules["position{$i}"] = 'required|string';
        }

        // Validation rules for substitute players
        for ($i = 1; $i <= 3; $i++) {
            $rules["substituteJerseyNumber{$i}"] = 'required|numeric';
            $rules["substitutePlayerName{$i}"] = 'required|string';
            $rules["substitutePosition{$i}"] = 'required|string';
            $rules["substituteReason{$i}"] = 'required|string';
        }

        // Additional validation rule for captain (only one captain should be selected)
        $rules['captain'] = 'required|numeric|between:1,11'; // Adjust the range based on your player count

        return $rules;
    }
}
