@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        @if (isset($comic))
            <h1 class="display-4">{{ $comic->title }}</h1>
            <div class="card mb-3">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                <div class="card-body">
                    <p class="card-text fw-bold">Series: {{ $comic->series }}</p>
                    <p class="card-text fw-bold">Description: {{ $comic->description }}</p>
                    <p class="card-text fw-bold">Price: {{ $comic->price }}</p>
                    <p class="card-text fw-bold">Sale date: {{ $comic->sale_date }}</p>
                    <p class="card-text fw-bold">Type: {{ $comic->type }}</p>
                    <a href="{{ route('comics.edit', $comic) }}" class="btn btn-primary">Edit</a>
                </div>
            </div>
        @else
            <h1 class="display-4">No Comic Found</h1>
        @endif
    </div>
@endsection
