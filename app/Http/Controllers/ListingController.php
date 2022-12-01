<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use App\Services\SearchService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{
    public function index(Request $request, SearchService $service)
    {
        if ($request->has('search')) {
            $listings = $service->search($request->search);
        }

        return view('home', [
            'listings' => $listings ?? Article::all(),
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
            'category' => 'required',

        ]);

        Article::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }
}
