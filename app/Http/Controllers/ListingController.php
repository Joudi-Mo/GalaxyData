<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use App\Services\SearchService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    public function index(Request $request, SearchService $service)
    {
        if ($request->has('search')) {
            $listings = $service->search($request->search);
        }

        if ($request->has('tag')) {
            // Hieronder wordt het eerste gedeelte gecheckt of het niet null is(Tag::where ...), niet? dan gaat de listings met alle article vullen
            $listings = Tag::where('tag', $request->tag)->first()->articles ?? Article::all(); //first opzoeken 
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
            'category_id' => 'required',

        ]);

        $formFields['user_id'] = auth()->id();
        $formFields['is_populair'] = '0';
        $formFields['likes'] = '0';
        $formFields['dislikes'] = '0';

        Article::create($formFields);
        return redirect('/')->with('message', 'Listing created successfully!');
    }

    public function destroyUser($id)
    {
        $deletedUser = User::findOrFail($id);
        $deletedUser->delete();
        return redirect('/admin/users')->with('message', 'Article deleted succesfully');
    }

    public function destroy($id)
    {
        $listing = Article::findOrFail($id);
        $listing->delete();
        return redirect('/myarticles')->with('message', 'Article deleted succesfully');
    }

    public function destroyAll()
    {
        $deletedArticles = Article::where('user_id', Auth::id())->get();

        foreach ($deletedArticles as $value) {
            $value->delete();
        }
        return redirect('/myarticles')->with('message', 'Article deleted succesfully');
    }

}
