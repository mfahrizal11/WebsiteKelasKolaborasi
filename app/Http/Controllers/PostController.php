<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $post = Post::all();
            return view ('home')->with('post', $post);
    }

    public function show(Post $post)
    {
        return view ('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
