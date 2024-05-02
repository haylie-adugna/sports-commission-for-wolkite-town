<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('user_create');
    }

    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'min:3', 'max:150', 'alpha'],
            'middle_name' => ['required', 'string', 'min:3', 'max:150', 'alpha'],
            'last_name' => ['required', 'string', 'min:3', 'max:150', 'alpha'],
            'mother_full_name' => ['required', 'string', 'min:6', 'max:150', 'regex:/^[a-zA-Z]+(\s[a-zA-Z]+)+$/'],
            'date_of_birth' => ['required', 'date'],
            'gender' => ['required', 'string'],
            'email' => ['email', 'max:100', 'unique:users,email,id'],
            'roles.*' => ['integer'],
            'roles' => ['required', 'array'],
            'phone_number' => ['string', 'min:10', 'max:20', 'unique:users,phone_number'],
            'password' => ['required', Password::defaults(), 'confirmed'],
            'age' => ['required', 'integer'],
            'country' => ['required'],
            'nationality' => ['required'],
            'city' => ['required'],
            'address' => ['required', 'string', 'min:6', 'max:120'],
            'photo' => ['image', 'mimes:jpeg,gif,png,jpg', 'max:2048'],
        ];
    }

    protected function withValidator($validator)
    {
        // Hash the password before validation
        $validator->after(function ($validator) {
            $this->merge([
                'password' => bcrypt($this->input('password')),
            ]);
        });
    }
}
