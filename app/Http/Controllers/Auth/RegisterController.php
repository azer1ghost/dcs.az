<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected string $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('website.pages.register');
    }

    protected function validator(array $data): \Illuminate\Contracts\Validation\Validator
    {
        $data['phone'] = phone_cleaner($data['phone']);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:50'],
            'surname' => ['required', 'string', 'max:50'],
            'phone' => ['required', 'string', 'max:15', 'unique:users,phone'],
            'email' => ['required', 'string', 'email:rfc,dns', 'max:50', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data): User
    {
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => null,
            'phone' => $data['phone'],
            'role_id' => 4,
            'password' => Hash::make($data['password']),
            'verify_code' => rand(111111, 999999)
        ]);
    }
}
