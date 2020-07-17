<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
//use App\Providers\WelcomeNewUserEvent;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Support\Facades\Mail;
//use App\Mail\WelcomeMail;

use Illuminate\Http\Request;


class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function register(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6','confirmed'],
        ]);

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        //event(new WelcomeNewUserEvent($user));
        return redirect('/')->with('success','Registered Successfully.Please Login');
    }
}
