@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8 py-5">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h1 class="display-4">Edit Comic</h1>
                    </div>
                    <div class="card-body">

                        {{-- loop to catch errors --}}
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form action="{{ route('comics.update', $comic) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="fw-bold my-1"for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ $comic->title }}">
                            </div>

                            <div class="form-group">
                                <label class="fw-bold my-1" for="description">Description</label>
                                <textarea name="description" id="description" class="form-control">{{ $comic->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label class="fw-bold my-1" for="thumb">Thumbnail URL</label>
                                <input type="text" name="thumb" id="thumb" class="form-control"
                                    value="{{ $comic->thumb }}">
                            </div>

                            <div class="form-group">
                                <label class="fw-bold my-1" for="price">Price</label>
                                <input type="number" name="price" min="0" id="price" class="form-control"
                                    value="{{ $comic->price }}">
                            </div>

                            <div class="form-group">
                                <label class="fw-bold my-1" for="series">Series</label>
                                <input type="text" name="series" id="series" class="form-control"
                                    value="{{ $comic->series }}">
                            </div>

                            <div class="form-group">
                                <label class="fw-bold my-1" for="sale_date">Sale Date</label>
                                <input type="date" name="sale_date" id="sale_date" class="form-control"
                                    value="{{ $comic->sale_date }}">
                            </div>

                            <div class="form-group">
                                <label class="fw-bold my-1" for="type">Type</label>
                                <input type="text" name="type" id="type" class="form-control"
                                    value="{{ $comic->type }}">
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Update Comic</button>
                        </form>

                        <form action="{{ route('comics.destroy', $comic) }}" method="POST" class="mt-3">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this comic?')">Delete
                                Comic</button>
                        </form>

                        <a href="{{ route('home') }}" class="btn btn-primary mt-3">Home</a>
                    </div>
                @endsection
