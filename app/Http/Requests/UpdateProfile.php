<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfile extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:50|min:2',
            'surname' => 'required|string|max:50|min:2',
            'number' => 'required|string|max:50|min:2',
            'profession' => 'required|string|max:50|min:2',
            'email' => 'required|email:rfc,dns|max:50|unique:users,email,'.auth()->id(),
        ];
    }
}
