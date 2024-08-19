@extends('backend.layouts.main')
@section('main-container')

<div class="container-fluid">
    <h1 class="h3 mb-1 text-gray-800">Edit Blog</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
                <div class="mb-3">
                    <label for="birthdaytime">(Date & Time):</label>
                    <input type="datetime-local" id="birthdaytime" name="Date_time" value="{{ $blog->Date_time }}" required>
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">Blog Images:</label>
                    <input type="file" class="form-control" name="image" id="file">
                    <img src="{{ asset('backend/img/' . $blog->image) }}" width="100">
                </div>
                <div class="mb-3">
                    <label for="sub_title" class="form-label">Sub Title:</label>
                    <input type="text" class="form-control" name="sub_title" id="sub_title" value="{{ $blog->sub_title }}" required>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $blog->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea class="form-control" name="description" id="description" rows="4" required>{{ $blog->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection
