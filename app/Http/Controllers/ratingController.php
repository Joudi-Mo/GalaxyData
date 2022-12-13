<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ratingController extends Controller
{
    public function like(Request $request)
    {
        // retrieve the post_id from the request
        $post_id = $request->input('post_id');

        // increment the like count for the post
        // you would need to add a database table to store the post likes
        // and update the like count here

        // redirect back to the previous page
        return back();
    }

    public function dislike(Request $request)
    {
        // retrieve the post_id from the request
        $post_id = $request->input('post_id');

        // decrement the like count for the post
        // you would need to add a database table to store the post likes
        // and update the like count here

        // redirect back to the previous page
        return back();
    }

    public function likedislike(Request $request)
    {
        // retrieve the post_id from the request
        $post_id = $request->input('post_id');

        // decrement the like count for the post
        // you would need to add a database table to store the post likes
        // and update the like count here

        // redirect back to the previous page
        return back();
    }
}