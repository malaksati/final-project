<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        'username' => 'required',
        'email' => 'required',
        'password' => 'required',
        'role',
        'image',
        'age' => 'required',
        'birthdate' => 'required',
        'address' => 'required',
        'gender' => 'required',
        'phone' => 'required'
        ];
    }
}
