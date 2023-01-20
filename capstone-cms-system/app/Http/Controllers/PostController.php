<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller {

    // Route Model Binding - get the post through as an argument, this is injecting the class as an argument
    public function show(Post $post) {
        return view('blog-post', ['post' => $post]);
    }
}