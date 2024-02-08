<?php

namespace App\Http\Requests\User;

use App\Helpers\Qs;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    protected $user;

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
            'first_name' => ['required', 'string', 'min:3', 'max:150'],
            'middle_name'=> ['required', 'string', 'min:3', 'max:150'],
            'last_name'=> ['required', 'string', 'min:3', 'max:150'],
            'mother_full_name'=> ['required', 'string', 'min:6', 'max:150'],
            'date_of_birth' =>['required', 'date'],
            'gender'=> ['required', 'string'],
            'email'=> ['email', 'max:100', 'unique:users'],
            'phone_number'=> ['string', 'min:12', 'max:20', 'unique:users'],
            'user_type'=> ['required'],
            'user_name'=> ['alpha_dash', 'min:6', 'max:100', 'unique:users'],
            'password' => ['required', Password::defaults(), 'confirmed'],
            'department'=> ['required', 'string', 'min:6', 'max:150'],
            'year'=> ['required'],
            'semister'=> ['required'],
            'block_number'=> ['required', 'integer'],
            'dorm_number'=> ['required', 'integer'],
            'state'=> ['required'],
            'nationality'=> ['required'],
            'city'=> ['required'],
            'address'=> ['required', 'string', 'min:6', 'max:120'],
            'photo'=> ['image', 'mimes:jpeg,gif,png,jpg', 'max:2048'],
        ];
    }
}
