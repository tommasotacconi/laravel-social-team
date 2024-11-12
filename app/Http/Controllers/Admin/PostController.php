<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Request\UpdatePostsRequest;


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