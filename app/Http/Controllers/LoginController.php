<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;
use Session;

use Illuminate\Http\Request;

class LoginController extends Controller
{


    // public function showLoginForm()
    // {
    //     return view('pages.index');
    // }

    public function login(Request $request)
    {
        $validate = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $remember_token = $request->has('remember');

        if (Auth::attempt(['email' => $email, 'password' => $password], $remember_token)) {
            //if successfull then redirect to the intended view
            Session::put('email', $request->input('email'));
            $user = User::where('email', $email)->first();
            $id = $user->id;
            return redirect('/profile')->with('id', $id)->with('success', 'You are logged in');
            //return response()->with('id', $id)->json(['success', 'You are logged in']);
        } else {
            Session::flash('error', 'Email and Password does not match any data,Kindly re-enter your details');
            return redirect()->back();
        }
    }



    public function logout(Request $request)
    {

        Auth::logout();
        return redirect('/')->with('Success', 'You logged out');
    }
}
