<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscriberRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => 'required|email:rfc,dns|max:50|unique:subscribers,email',
            'token' => 'required|string|min:32|max:32|unique:subscribers,token',
            'lang' => 'required|in:' . implode(',', config('app.locales')),
        ];
    }
}
