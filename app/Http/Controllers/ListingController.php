<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{
    public function index(Request $request)
    {
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
        return view('users.articleadd');
    }
}
