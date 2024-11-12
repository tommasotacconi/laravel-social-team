<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index () {
        $posts = Post::all();

        return view ('admin.posts.index', compact('posts'));
    }

    public function show () {

    }

    public function create () {

    }

    public function store () {

    }

    public function edit () {

    }

    public function update () {

    }

    public function destroy () {

    }
}