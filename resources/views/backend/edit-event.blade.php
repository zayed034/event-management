@extends('backend.layouts.main')
@section('main-container')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Edit Event</h2>
            <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="day" class="form-label">Day:</label>
                    <input type="text" class="form-control" name="day" id="day" value="{{ $event->day }}" placeholder="Enter the Day">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Brand Images:</label>
                    <input type="file" class="form-control" name="image" id="image">
                    @if ($event->image)
                        <img src="{{ asset('backend/img/' . $event->image) }}" alt="{{ $event->title }}" width="100">
                    @endif
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $event->title }}" placeholder="Enter the Title">
                </div>
                <div class="mb-3">
                    <label for="sub_title" class="form-label">Sub Title:</label>
                    <input type="text" class="form-control" name="sub_title" id="sub_title" value="{{ $event->sub_title }}" placeholder="Enter the Sub Title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea class="form-control" name="description" id="description" placeholder="Enter the Description" rows="4">{{ $event->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="s_name" class="form-label">Speaker Name:</label>
                    <input type="text" class="form-control" name="s_name" id="s_name" value="{{ $event->s_name }}" placeholder="Enter the Speaker Name">
                </div>
                <div class="mb-3">
                    <label for="seat" class="form-label">Seat:</label>
                    <input type="text" class="form-control" name="seat" id="seat" value="{{ $event->seat }}" placeholder="Enter the Seat">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection
