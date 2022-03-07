<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected string $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest:student')->except(['logout']);
    }

    public function showLoginForm()
    {
        return view('website.pages.login');
    }

    protected function guard()
    {
        return Auth::guard('student');
    }
}
