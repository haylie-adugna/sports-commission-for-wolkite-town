<?php

namespace App\Http\Requests\User;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
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
        $userId = $this->route('user')->id;
        return [
            'first_name' => ['sometimes', 'required', 'string', 'min:3', 'max:150'],
            'middle_name' => ['sometimes', 'required', 'string', 'min:3', 'max:150'],
            'last_name' => ['sometimes', 'required', 'string', 'min:3', 'max:150'],
            'date_of_birth' => ['sometimes', 'required', 'date'],
            'gender' => ['sometimes', 'required', 'string'],
            'phone_number' => [
                'required',
                'string',
                'min:12',
                'max:20',
                'unique:users,phone_number,' . $userId,
            ],
            'user_type' => ['sometimes', 'required'],
            'age' => ['sometimes', 'required', 'integer'],
            'country' => ['sometimes', 'required'],
            'nationality' => ['sometimes', 'required'],
            'city' => ['sometimes', 'required'],
            'address' => ['sometimes', 'required', 'string', 'min:6', 'max:120'],
            'photo' => ['sometimes', 'image', 'mimes:jpeg,gif,png,jpg', 'max:2048'],
        ];
    }
}
