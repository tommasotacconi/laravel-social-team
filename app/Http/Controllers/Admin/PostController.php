<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePostsRequest;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    //
    public function index () {
        $posts = Post::all();

        return view ('admin.posts.index', compact('posts'));
    }

        $post = Post::findOrFail($id);


    public function create () {
        return view('admin.posts.create');
    }

    public function store (Request $request, string $id) {
        $new_post = Post::create($request->all());
        return redirect()->route('admin.posts.show', compact('id'));
    }

    public function edit() {}

    public function update() {}

    public function update (UpdatePostsRequest $request, string $id) {

        $request->validated();

        $newData = $request->all();

        $post = Post::findOrFail($id);
        $post->title = $newData["title"];
        $post->author = $newData["author"];
        $post->description = $newData["description"];

        $post->save();

        return redirect()->route("admin.posts.show", [ "id"=> $post->id] );
    }

    public function destroy () {

    }
}