<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
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
        $this->middleware('guest:student');
    }

    protected function guard()
    {
        return \Auth::guard('student');
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
            'phone' => ['required', 'string', 'max:15', 'unique:students,phone'],
            'email' => ['required', 'string', 'email:rfc,dns', 'max:50', 'unique:students,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data): Student
    {
        return Student::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
