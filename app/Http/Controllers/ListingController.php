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
        $tags = Tag::inRandomOrder()->limit(3)->get();

        $listings = Article::all();
        if ($request->has('tag') ) {
            $tag = Tag::where('tag', $request->tag)->first() ; //first opzoeken 
            if(!is_null($tag)){
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
        return view('admin.articleadd');
    }
}