<?php

namespace App\Http\Requests\venue;


use Illuminate\Foundation\Http\FormRequest;

class VenueCreateRequest extends FormRequest
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
            'venue_name' => 'required|string',
            'description' => 'nullable|string',
            'address' => 'required|string',
            'capacity' => 'required|integer',
            'facilities' => 'required|string',
            'layout' => 'nullable|image|mimes:jpeg,png,jpg,gif', // Assuming it's a string, change if necessary
            'availability' => 'required|string',
            'contact_information' => 'required|string',
            'accessibility' => 'required|string',
            'cost' => 'required|numeric',
            'booking' => 'required|string',
            'technical_specifications' => 'required|string',
            'rules_and_regulations' => 'nullable|string',
        ];
    }
}
