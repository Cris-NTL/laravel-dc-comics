@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <div class="comic-details">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <p>Series: {{ $comic->series }}</p>
            <p>Description: {{ $comic->description }}</p>
            <p>Price: {{ $comic->price }}</p>
            <p>Sale date: {{ $comic->sale_date }}</p>
            <p>Type: {{ $comic->type }}</p>
        </div>
    </div>
@endsection
