@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        @if (isset($comic))
            <h1 class="display-4">{{ $comic->title }}</h1>
            <div class="mb-3 d-flex">
                <img src="{{ $comic->thumb }}" class="me-3 show_img" alt="{{ $comic->title }}">
                <div class="show_details p-3">
                    <p class="card-text fw-bold">Series: {{ $comic->series }}</p>
                    <hr>
                    <p class="card-text fw-bold">Description: {{ $comic->description }}</p>
                    <hr>
                    <p class="card-text fw-bold">Price: {{ $comic->price }}</p>
                    <hr>
                    <p class="card-text fw-bold">Sale date: {{ $comic->sale_date }}</p>
                    <hr>
                    <p class="card-text fw-bold">Type: {{ $comic->type }}</p>
                    <hr>
                    <a href="{{ route('comics.edit', $comic) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('comics.index', $comic) }}" class="btn btn-success">See All</a>
                </div>
            </div>
        @else
            <h1 class="display-4">No Comic Found</h1>
        @endif
    </div>
@endsection
