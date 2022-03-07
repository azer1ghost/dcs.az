<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfile extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:20|min:2',
            'surname' => 'required|string|max:20|min:2',
            'father' => 'required|string|max:20|min:2',
            'phone' => 'required|string|max:20|unique:students,phone,'.auth('student')->id(),
            'profession' => 'required|string|max:50|min:2',
            'email' => 'required|email:rfc,dns|max:50|unique:students,email,'.auth('student')->id(),
        ];
    }
}
