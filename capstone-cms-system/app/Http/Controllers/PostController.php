<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller {


    public function index() {
        return view('admin.posts.index');
    }
    // Route Model Binding - get the post through as an argument, this is injecting the class as an argument
    public function show(Post $post) {
        return view('blog-post', ['post' => $post]);
    }

    public function create() {
        return view('admin.posts.create');
    }


    public function store() {

        $inputs = request()->validate([
            'title' => 'required | min:8 | max:255',
            'post_image' => 'file',
            'body' => 'required'

        ]);

        if (request('post_image')) {
            $inputs['post_image'] = request('post_image')->store('images');
        }
        // set up with symbolic link in config>fileSystems - FILESYSTEM_DISK=public
        auth()->user()->posts()->create($inputs);

        return back();
        // dd(request()->all());
    }
}