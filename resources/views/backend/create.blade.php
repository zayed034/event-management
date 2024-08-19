@extends('backend.layouts.main')

@section('main-container')
<div class="container">
    <h1 class="h3 mb-1 text-gray-800">Add Testimonial</h1>

    <form method="POST" action="{{ route('backend.testimonial.store') }}">
        @csrf
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Enter description" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
        </div>
        <div class="mb-3">
            <label for="designation" class="form-label">Designation:</label>
            <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter designation" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
