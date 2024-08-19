<!-- resources/views/backend/blog-details/edit-blogdetails.blade.php -->

@extends('backend.layouts.main')
@section('main-container')

<div class="container">
    <h1 class="h3 mb-1 text-gray-800">Edit Blog</h1>
    <form action="{{ route('blog-details.update', $blogdetails->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="s_title" class="form-label">Sub Title:</label>
            <input type="text" class="form-control" name="s_title" id="s_title" value="{{ $blogdetails->s_title }}" placeholder="Enter Sub Title">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $blogdetails->title }}" placeholder="Enter Title">
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">Blog Images:</label>
            <input type="file" class="form-control" name="image" id="file">
            <img src="{{ Storage::url($blogdetails->image) }}" alt="{{ $blogdetails->title }}" width="50">
        </div>
        <div class="mb-3">
            <label for="date_time" class="form-label">Post (date and time):</label>
            <input type="datetime-local" class="form-control" id="date_time" name="date_time" value="{{ $blogdetails->date_time }}">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category:</label>
            <input type="text" class="form-control" name="category" id="category" value="{{ $blogdetails->category }}" placeholder="Enter Category">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter description" rows="4">{{ $blogdetails->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="d_title" class="form-label">Desc. Title:</label>
            <input type="text" class="form-control" name="d_title" id="d_title" value="{{ $blogdetails->d_title }}" placeholder="Enter Desc. Title">
        </div>
        <div class="mb-3">
            <label for="list" class="form-label">List Item:</label>
            <input type="text" class="form-control" name="list" id="list" value="{{ $blogdetails->list }}" placeholder="Enter List Item">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
