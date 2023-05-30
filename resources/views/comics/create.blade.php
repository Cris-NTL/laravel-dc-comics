@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Comic</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="thumb">Thumbnail URL</label>
                <input type="text" name="thumb" id="thumb" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="series">Series</label>
                <input type="text" name="series" id="series" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="sale_date">Sale Date</label>
                <input type="date" name="sale_date" id="sale_date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" name="type" id="type" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Comic</button>
        </form>
    </div>
@endsection
