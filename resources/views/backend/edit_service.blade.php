<!-- resources/views/backend/edit-service.blade.php -->

@extends('backend.layouts.main')

@section('main-container')
    <div class="container">
        <h1 class="h3 mb-1 text-gray-800">Edit Service</h1>
        <!-- Form to edit service details -->
        <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Main Images -->
            <div class="mb-3">
                <label for="m_image" class="form-label">Main Image:</label>
                <input type="file" class="form-control" name="m_image" id="m_image">
                @if ($service->m_image)
                    <img src="{{ asset('storage/' . $service->m_image) }}" width="50">
                @endif
            </div>

            <!-- Top Images -->
            <div class="mb-3">
                <label for="t_image" class="form-label">Top Image:</label>
                <input type="file" class="form-control" name="t_image" id="t_image">
                @if ($service->t_image)
                    <img src="{{ asset('storage/' . $service->t_image) }}" width="50">
                @endif
            </div>

            <!-- Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $service->title }}">
            </div>

            <!-- Sub Title -->
            <div class="mb-3">
                <label for="sub_title" class="form-label">Sub Title</label>
                <input type="text" class="form-control" name="sub_title" id="sub_title" value="{{ $service->sub_title }}">
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" name="description" id="description" rows="2">{{ $service->description }}</textarea>
            </div>

            <!-- List Text -->
            <div class="mb-3">
                <label for="list_text" class="form-label">List Text</label>
                <input type="text" class="form-control" name="list_text" id="list_text" value="{{ $service->list_text }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
