@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Comic</h1>

        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $comic->title }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ $comic->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="thumb">Thumbnail URL</label>
                <input type="text" name="thumb" id="thumb" class="form-control" value="{{ $comic->thumb }}"
                    required>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ $comic->price }}"
                    required>
            </div>

            <div class="form-group">
                <label for="series">Series</label>
                <input type="text" name="series" id="series" class="form-control" value="{{ $comic->series }}"
                    required>
            </div>

            <div class="form-group">
                <label for="sale_date">Sale Date</label>
                <input type="date" name="sale_date" id="sale_date" class="form-control" value="{{ $comic->sale_date }}"
                    required>
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" name="type" id="type" class="form-control" value="{{ $comic->type }}"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">Update Comic</button>
        </form>
    </div>
@endsection
