@extends('backend.layouts.main')
@section('main-container')

<div class="container-fluid">
    <h1 class="h3 mb-1 text-gray-800">Edit Gallery</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('backend.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="gallery" class="form-label">Gallery Images:</label>
                    <input type="file" class="form-control" name="gallery" id="gallery">
                    <img src="{{ asset($gallery->gallery) }}" alt="Gallery Image" width="50">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $gallery->title }}">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Wedding Name:</label>
                    <input type="text" class="form-control" name="name" id="wedding" value="{{ $gallery->name }}">
                </div>
                <div class="mb-3">
                    <label for="date">Wedding Date:</label>
                    <input type="date" class="form-control" name="date" id="date" value="{{ $gallery->date }}">
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Video Link:</label>
                    <input type="url" class="form-control" name="link" id="link" value="{{ $gallery->link }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection
