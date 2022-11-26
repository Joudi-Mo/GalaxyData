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
        $tags = Tag::inRandomOrder()->limit(3)->get();

        $listings = Article::all();
        $categories = Category::all();
        if ($request->has('tag')) {
            $tag = Tag::where('tag', $request->tag)->first() ; //first opzoeken
            if (!is_null($tag)) {
                $listings = $tag->articles;
            }
        }

        return view('home', [
            'listings' => $listings,
            // 'listings' => Article::all(),
            'tests' => $tags
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
            
        ]);

        return redirect('/')->with('message', 'Listing created successfully!');
    }
}