<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(){
        return view('home', [
            'listings' => Article::all()
        ]);
    }
}