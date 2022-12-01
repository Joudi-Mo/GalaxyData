<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Tag;

class SearchService
{

    public function search($searchString)
    {

        if (Article::where('title', $searchString)->get()->isNotEmpty()) {
            return Article::where('title', $searchString)->get();
        }

        if (!is_null(Tag::where('tag', $searchString)->first())) {
            return Tag::where('tag', $searchString)->first()->articles;
        }

        return Article::all();
    }
}
