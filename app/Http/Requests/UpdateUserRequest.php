<?php

namespace App\Http\Requests;

use App\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'first_name' => ['sometimes', 'required', 'string', 'min:3', 'max:150'],
            'middle_name' => ['sometimes', 'required', 'string', 'min:3', 'max:150'],
            'last_name' => ['sometimes', 'required', 'string', 'min:3', 'max:150'],
            'date_of_birth' => ['sometimes', 'required', 'date'],
            'gender' => ['sometimes', 'required', 'string'],
            'phone_number' => ['sometimes', 'string', 'min:10', 'max:20', 'unique:users'],
            'roles.*' => ['integer'],'roles'   => ['required','array'],
            'age' => ['sometimes', 'required', 'integer'],
            'country' => ['sometimes', 'required'],
            'nationality' => ['sometimes', 'required'],
            'city' => ['sometimes', 'required'],
            'address' => ['sometimes', 'required', 'string', 'min:6', 'max:120'],
            'photo' => ['sometimes', 'image', 'mimes:jpeg,gif,png,jpg', 'max:2048'],

        ];

    }
}
