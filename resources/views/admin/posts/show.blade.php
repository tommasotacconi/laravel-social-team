@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h2>Dettagli di {{ $post->title }}</h2>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <h5 class="card-title">Descrizione</h5>
                    <p class="card-text">{{ $post->description }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <strong>Data di Creazione:</strong>
                        {{ $post->created_at->format('d-m-Y') }}
                    </li>
                    <li class="list-group-item">
                        <strong>Ultima Modifica:</strong>
                        {{ $post->updated_at->format('d-m-Y') }}
                    </li>
                    @if($post->status)
                        <li class="list-group-item">
                            <strong>Stato:</strong>
                            <span class="badge bg-success">Attivo</span>
                        </li>
                    @else
                        <li class="list-group-item">
                            <strong>Stato:</strong>
                            <span class="badge bg-danger">Non Attivo</span>
                        </li>
                    @endif
                </ul>

                @if($post->image)
                    <div class="my-4 text-center">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid rounded" style="max-width: 300px;">
                    </div>
                @endif

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Torna alla Lista</a>
                    <div>
                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning">Modifica</a>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Sei sicuro di voler eliminare questo elemento?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
