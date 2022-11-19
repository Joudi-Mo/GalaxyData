<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{
    // show register/ crate form 
    public function create() {
        return view('register');
    }

    //creating user 
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],    
            'password' =>  'required|confirmed|min:6'
            
        ]);

        //encrypt password yahurd
        $formFields['password'] = bcrypt($formFields['password']);
        // create user 
        $user = User::create($formFields);
        //login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }


}