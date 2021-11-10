<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscriberRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => 'required|email:rfc,dns|max:50|unique:subscribers,email',
            'token' => 'required|string|min:50|max:50|unique:subscribers,token',
            'locale' => 'required|in:' . implode(',', config('app.locales')),
        ];
    }
}
