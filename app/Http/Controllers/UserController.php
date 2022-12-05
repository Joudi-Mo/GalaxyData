<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use App\Models\User;
use App\Services\SearchService;
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

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/')->with('message', 'User logged out');
    }

    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $formFields = $request->validate([

            'email' => ['required', 'email'],
            'password' =>  'required'

        ]);
        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function showArticles(Request $request, SearchService $service)
    {
        if ($request->has('search')) {
            $listings = $service->search($request->search);
        }
        
        if ($request->has('tag')) {
            // Hieronder wordt het eerste gedeelte gecheckt of het niet null is(Tag::where ...), niet? dan gaat de listings met alle article vullen
            $listings = Tag::where('tag', $request->tag)->first()->articles ?? Article::all(); //first opzoeken 
        } 

        return view('users/myarticles', [
            'listings' => $listings ?? Article::all(),
            'tests' => Tag::inRandomOrder()->limit(3)->get() //Stuur drie random tags
        ]);
    }

}
