@extends('backend.layouts.main')
@section('main-container')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Edit Event Details</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('event-details.update', $eventdetail->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="s_title" class="form-label">Sub Title:</label>
                    <input type="text" class="form-control" name="s_title" id="s_title" value="{{ $eventdetail->s_title }}" required>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $eventdetail->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">Blog Images:</label>
                    <input type="file" class="form-control" name="image" id="file">
                    <img src="{{ asset('backend/img/' . $eventdetail->image) }}" width="100" alt="{{ $eventdetail->title }}">
                </div>
                <div class="mb-3">
                    <label for="e_date" class="form-label">Event Date</label>
                    <input type="date" class="form-control" name="e_date" id="e_date" value="{{ $eventdetail->e_date }}" required>
                </div>
                <div class="mb-3">
                    <label for="e_time" class="form-label">Event time</label>
                    <input type="time" class="form-control" name="e_time" id="e_time" value="{{ $eventdetail->e_time }}" required>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" name="location" id="location" value="{{ $eventdetail->location }}" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Description:</label>
                    <textarea class="form-control" name="description" id="message" rows="4" required>{{ $eventdetail->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        <div class="col-md-6"></div>
    </div>
</div>

@endsection
