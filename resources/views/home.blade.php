@extends('layouts.app')

@section('content')
    <h1>PROVA</h1>
    <a href="{{ route('comics.index') }}">Vai all'elenco dei fumetti</a>
    <br>
    <a href="{{ route('comics.create') }}">Crea un nuovo fumetto</a>
    <br>
    @if (isset($comics))
        @foreach ($comics as $comic)
            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">Visualizza il fumetto: {{ $comic->title }}</a>
            <br>
        @endforeach
    @endif
@endsection
