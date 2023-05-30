@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h1 class="display-4">Edit Comic</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('comics.update', $comic) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="fw-bold my-1"for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ $comic->title }}" required>
                            </div>

                            <div class="form-group">
                                <label class="fw-bold my-1" for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" required>{{ $comic->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label class="fw-bold my-1" for="thumb">Thumbnail URL</label>
                                <input type="text" name="thumb" id="thumb" class="form-control"
                                    value="{{ $comic->thumb }}" required>
                            </div>

                            <div class="form-group">
                                <label class="fw-bold my-1" for="price">Price</label>
                                <input type="number" name="price" id="price" class="form-control"
                                    value="{{ $comic->price }}" required>
                            </div>

                            <div class="form-group">
                                <label class="fw-bold my-1" for="series">Series</label>
                                <input type="text" name="series" id="series" class="form-control"
                                    value="{{ $comic->series }}" required>
                            </div>

                            <div class="form-group">
                                <label class="fw-bold my-1" for="sale_date">Sale Date</label>
                                <input type="date" name="sale_date" id="sale_date" class="form-control"
                                    value="{{ $comic->sale_date }}" required>
                            </div>

                            <div class="form-group">
                                <label class="fw-bold my-1" for="type">Type</label>
                                <input type="text" name="type" id="type" class="form-control"
                                    value="{{ $comic->type }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Update Comic</button>
                        </form>

                        <form action="{{ route('comics.destroy', $comic) }}" method="POST" class="mt-3">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete Comic</button>
                        </form>
                    </div>
                @endsection
