<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function logout(){
        auth()->logout();

        return redirect('/')->with('success','Good bye!');
    }
    /*
     * function for the login
     */
    public function create()
    {
        return view('login.create');
    }

    /*
     * function for the login
     */
    public function store()
    {
        //validate the request
        $arttributes = request()->validate([
            'email' => 'required|exists:users,email',
            'password'=>'required'
        ]);
        //athunticate
        if(auth()->attempt($arttributes)){
            session()->regenerate();
            return redirect('/')->with('success','You are logged in into the system');
        }
        //redirect with success message
        return back()
            ->withInput()
            ->withErrors('email','Provided credientials could not be varified.');

    }
}
