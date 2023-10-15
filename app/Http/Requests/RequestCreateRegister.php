<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCreateRegister extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'pseudo' => 'required|string|min:4|max:20|unique:users,pseudo',
            'email' => 'required|max:255|regex:/[^a-zA-Z0-9]/|unique:users,email',
            'password' => 'required|min:10|max:255|regex:/[A-Z]/|regex:/[a-z]/|regex:/[0-9]/|regex:/[^a-zA-Z0-9]/',
            'confirmedPassword' => 'confirmed:password'
        ];
    }
}

// $uppercase = preg_match("/[A-Z]/", $password);
// $lowercase = preg_match("/[a-z]/", $password);
// $number = preg_match("/[0-9]/", $password);
// $specialChar = preg_match("/[^a-zA-Z0-9]/", $password);
