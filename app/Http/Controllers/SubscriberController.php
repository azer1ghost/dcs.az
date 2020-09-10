<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

class SubscriberController extends Controller
{
    public function index($token){
        //get subscriber by token
        $subscriber = Subscribe::where('token', $token)->firstOrFail();

        //go to subscribers setting page with data of subscribers
        return view('mail.subscriber',compact('subscriber'));
    }

    public function create(Request $request){

        //get locale and set it current locale
        App::setLocale($request->input('locale'));

        //get email
        $credentials = $request->only('email' );

        //error messages
        $messages = [
                'email.required' => "Please Type Your Email address",
                'email.email'    => "Please Type Correct Email address",
        ];
        //rules for email validator
        $rules = [
                'email' => 'required|email:rfc,dns'
        ];

        //email validator
        $validator = Validator::make($credentials, $rules, $messages);

        //if validator has error set message as error
        if ($validator->fails()){
            return [
                    'status' => false,
                    'message' => $validator->errors()->first(),
            ];
        }

        //else set message as subscriber email
        else {
            //update or create subscriber
            Subscribe::updateOrCreate(
                    ['email' => $request->input('email')],
                    ['lang' => $request->input('locale'), 'subscribe' => 'news, courses']
            );
            return [
                    'status' => true,
                    'message' => $request->input('email'),
            ];
        }

    }

    public function update(){

    }
}
