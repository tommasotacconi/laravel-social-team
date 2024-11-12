@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <th>{{$post->title}}</th>
            <td>{{$post->author}}</td>
            <td>
                <button class="btn btn-primary text-light">
                    <a href="{{route('admin.posts.show', $post->id)}}" class="text-light">Visualizza</a>
                </button>
                <button class="btn btn-warning">
                    <a href="{{route('admin.posts.edit', $post->id)}}">Modifica</a>
                </button>
                <form action="{{route('admin.posts.delete', $post->id)}}" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">
                        <a href="">Elimina</a>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
