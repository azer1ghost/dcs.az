<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected string $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except(['logout', 'phoneUpdate']);
    }

    public function showLoginForm()
    {
        return view('website.pages.login');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|string',
        ]);
    }

    public function phoneUpdate(Request $request)
    {
        $user = $request->user();

        if($user->getAttribute('phone') != $request->get('phone')){
            $msg = "Telefon nömrəniz dəyişdirildi. Döğrulama kodu yeni nömrəyə göndərildi.";
            $user->update(['phone' => $request->get('phone')]);
            $user->sendPhoneVerificationNotification();
        }else{
            $msg = "Artıq bu nömrəyə Döğrulama kodu göndərilib, xahiş edirik mesajları yoxlayasınız.";
        }

        return back()->withNotify("info", $msg, true);
    }
}
