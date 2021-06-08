<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'name' => ['required', 'max:190', 'string'],
            'email' => ['required', 'unique:users', 'email'],
            'profile_image' => ['nullable', 'max:190', 'string'],
            'password' => ['nullable'],
            'roles' => 'array',
        ];
    }
}
