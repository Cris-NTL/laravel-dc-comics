@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Comics</h1>

        @foreach ($comics as $comic)
            <div class="comic">
                <h2>{{ $comic->title }}</h2>
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <p>Series: {{ $comic->series }}</p>
                <p>Type: {{ $comic->type }}</p>
                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">View Details</a>
            </div>
        @endforeach

    </div>
@endsection
