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
        // $categories = Category::all();
        $listings = Article::all();
        if ($request->has('tag')) {
            // Hieronder wordt het eerste gedeelte gecheckt of het niet null is(Tag::where ...), niet? dan gaat de listings met alle article vullen
            $listings = Tag::where('tag', $request->tag)->first()->articles ?? Article::all(); //first opzoeken 
        } 
        
        if($request->has('search')) {
            // Hieronder wordt het eerste gedeelte gecheckt of het niet null is(Article::where...), niet? dan gaat de listings met alle article vullen
            $listings = Article::where('title', $request->search)->get() ?? Article::all();
        }

        return view('home', [
            'listings' => $listings,
            'tests' => Tag::inRandomOrder()->limit(3)->get() //Stuur drie random tags
        ]);
    }

    public function create()
    {
        return view('users.articleadd', [
            'categories' => Category::all(),
        ]);
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
            
        ]);

        $formFields['user_id'] = auth()->id();  
        $formFields['is_populair'] = '0';     
        $formFields['likes'] = '0';
        $formFields['dislikes'] = '0';  

        Article::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }
}