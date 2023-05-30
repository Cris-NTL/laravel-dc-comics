@extends('layouts.app')

@section('content')
    <div class="container">
        @if (isset($comic))
            <h1>{{ $comic->title }}</h1>
            <div class="comic-details">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <p>Series: {{ $comic->series }}</p>
                <p>Description: {{ $comic->description }}</p>
                <p>Price: {{ $comic->price }}</p>
                <p>Sale date: {{ $comic->sale_date }}</p>
                <p>Type: {{ $comic->type }}</p>
                <a href="{{ route('comics.edit', $comic) }}">Edit</a>
            </div>
        @else
            <h1>No Comic Found</h1>
        @endif
    </div>
@endsection
