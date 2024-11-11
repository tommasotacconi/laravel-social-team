@extends("layouts.app")

@section("content")

<div class="container">

    <form class="card col-8 px-3 m-auto" action="{{ route("admin.posts.store") }}" method="POST">
    @csrf
        <div class="my-1">
            <label for="post-name" class="form-label ps-2">Nome Post:</label>
            <input type="text" class="form-control" id="post-name" name="name" value="{{ old('name') }}">
            @error("name")
                <div class="alert alert-warning">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="my-1">
            <label for="post-author" class="form-label ps-2">Nome Autore:</label>
            <input type="text" class="form-control" id="post-author" name="author" value="{{ old('author') }}">
            @error("author")
                <div class="alert alert-warning">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="my-1">
            <label for="post-description" class="form-label ps-2">Descrizione:</label>
            <input type="text" class="form-control" id="post-description" name="description" value="{{ old('description') }}">
            @error("description")
                <div class="alert alert-warning">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="my-1 d-flex justify-content-around">
            <button class="btn btn-success my-2 px-3" type="submit">Invia</button>
            <button class="btn btn-warning my-2 px-3" type="reset">Svuota campi</button>
        </div>

    </form>
</div>

@endsection
