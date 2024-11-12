<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index() {}

    public function show($id)
    {

        $post = Post::findOrFail($id);


        return view('admin.posts.show', compact('post'));
    }

    public function create() {}

    public function store() {}

    public function edit() {}

    public function update() {}

    public function destroy() {}
}
