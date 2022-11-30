<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // show register/ crate form
    public function create()
    {
        return view('users.register');
    }

    //creating user
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' =>  'required|confirmed|min:6'

        ]);

        //encrypt password
        $formFields['password'] = bcrypt($formFields['password']);
        // create user
        $user = User::create($formFields);
        //login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    //show user
    public function index()
    {
        return view('admin.useroverview', [
            'users' => User::all()
        ]);
    }

    public function logout(Request $request){

        auth()->logout();

        return redirect('/')->with('message', 'User logged out');

    }
}