@extends('backend.layouts.main')
@section('main-container')

<div class="container-fluid">
    <h1 class="h3 mb-1 text-gray-800">Edit Speaker</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('speakers.update', $speaker->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="file" class="form-label">Main Images:</label>
                        <input type="file" class="form-control" name="m_image" id="speake_main_image">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="speake_title" value="{{ $speaker->title }}" placeholder="Enter your Title">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="speake_name" value="{{ $speaker->name }}" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="experience" class="form-label">Experience</label>
                        <input type="text" class="form-control" name="experience" id="speake_experience" value="{{ $speaker->experience }}" placeholder="Enter your experience">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <input type="text" class="form-control" name="description" id="speake_description" value="{{ $speaker->description }}" placeholder="Enter your description">
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">Your Images:</label>
                        <input type="file" class="form-control" name="image" id="speake_image">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
