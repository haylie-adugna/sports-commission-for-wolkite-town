<?php

namespace App\Http\Requests\Venue;

use Illuminate\Foundation\Http\FormRequest;

class VenueUpdateRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'venue_name' => 'sometimes|required|string',
            'description' => 'nullable|string',
            'address' => 'sometimes|required|string',
            'capacity' => 'sometimes|required|integer',
            'facilities' => 'sometimes|required|string',
            'layout' => 'nullable|image|mimes:jpeg,png,jpg,gif', // Assuming it's a string, change if necessary
            'availability' => 'sometimes|required|string',
            'contact_information' => 'sometimes|required|string',
            'accessibility' => 'sometimes|required|string',
            'cost' => 'sometimes|required|numeric',
            'booking' => 'sometimes|required|string',
            'technical_specifications' => 'sometimes|required|string',
            'rules_and_regulations' => 'nullable|string',
        ];
    }
}
