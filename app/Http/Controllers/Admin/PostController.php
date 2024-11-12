<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index () {

    }

    public function show () {

    }

    public function create () {
        return view('admin.posts.create');
    }

    public function store (Request $request, string $id) {
        $new_post = Post::create($request->all());
        return redirect()->route('admin.posts.show', compact('id'));
    }

    public function edit () {

    }

    public function update () {

    }

    public function delete () {

    }
}
