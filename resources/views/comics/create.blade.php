@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 py-5">
            <div class="card">
                <div class="card-header bg-success text-white text-center">
                    <h1 class="display-4">Create Comic</h1>
                </div>
                <div class="card-body">        
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title" class="fw-bold my-1">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description" class="fw-bold my-1">Description</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="thumb" class="fw-bold my-1">Thumbnail URL</label>
                <input type="text" name="thumb" id="thumb" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="price" class="fw-bold my-1">Price</label>
                <input type="number" min="0" name="price" id="price" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="series" class="fw-bold my-1">Series</label>
                <input type="text" name="series" id="series" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="sale_date" class="fw-bold my-1">Sale Date</label>
                <input type="date" name="sale_date" id="sale_date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="type" class="fw-bold my-1">Type</label>
                <input type="text" name="type" id="type" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success mt-3">Create Comic</button>
            <a href="{{ route('home') }}" class="btn btn-secondary mt-3">Home</a>
        </form>
    </div>
@endsection
