@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="display-4">COMICS</h1>
        <p class="lead">Welcome to the comics section! You can see all comics or create your own.</p>
        <hr class="my-4">
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{ route('comics.index') }}" role="button">See All</a>
            <a class="btn btn-success btn-lg" href="{{ route('comics.create') }}" role="button">Create One</a>
        </p>
    </div>
@endsection
