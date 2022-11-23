<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{
    public function index()
    {
        $tags = Tag::inRandomOrder()->limit(3)->get();
        return view('home', [
            'listings' => Article::all(),
            'tests' => $tags
        ]);
    }

    public function create()
    {
        return view('users.articleadd');
    }
}
