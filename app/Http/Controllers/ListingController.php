<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $listings = Article::all();
        if ($request->has('tag')) {
            $listings = Tag::where('tag', $request->tag)->first()->articles ?? Article::all(); //first opzoeken 
        } 
        
        if($request->has('search')) {
            $listings = Article::where('title', $request->search)->get() ?? Article::all();
        }

        return view('home', [
            'listings' => $listings,
            'tests' => Tag::inRandomOrder()->limit(3)->get()
        ]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('users.articleadd', [
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
            
        ]);

        Article::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }
}