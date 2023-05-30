@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="display-4 mb-4">All Comics</h1>

        <a href="{{ route('home') }}" class="btn btn-primary mb-3">Home</a>

        <div class="row py-5">
            @foreach ($comics as $comic)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body d-flex flex-column">
                            <h2 class="card-title">{{ $comic->title }}</h2>
                            <p class="card-text">Series: {{ $comic->series }}</p>
                            <p class="card-text">Type: {{ $comic->type }}</p>
                            <div class="mb-2 mt-auto">
                                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-secondary">View
                                    Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
