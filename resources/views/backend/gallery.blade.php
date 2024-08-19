@extends('backend.layouts.main')
@section('main-container')

<div class="container-fluid">
    <h1 class="h3 mb-1 text-gray-800">Gallery Management</h1>
    <p class="mb-4">Manage your gallery images and details here.</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('backend.gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="gallery" class="form-label">Gallery Images:</label>
                    <input type="file" class="form-control" name="gallery" id="gallery">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter your title">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Wedding Name:</label>
                    <input type="text" class="form-control" name="name" id="wedding" placeholder="Enter your wedding name">
                </div>
                <div class="mb-3">
                    <label for="date">Wedding Date:</label>
                    <input type="date" class="form-control" name="date" id="date">
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Video Link:</label>
                    <input type="url" class="form-control" name="link" id="link" placeholder="Enter your wedding video link">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
             <div class="admin-backend">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="hed-table">
                            <th>Image</th>
                            <th>Title</th>
                            <th>Wedding Name</th>
                            <th>Date</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($galleries as $gallery)
                        <tr>
                            <td><img src="{{ asset($gallery->gallery) }}" alt="Gallery Image" width="50"></td>
                            <td>{{ $gallery->title }}</td>
                            <td>{{ $gallery->name }}</td>
                            <td>{{ $gallery->date }}</td>
                            <td><a href="{{ $gallery->link }}" target="_blank">Video</a></td>
                            <td>
                                <a href="{{ route('backend.gallery.edit', $gallery->id) }}" class="btn btn-info">Edit</a>
                                <form action="{{ route('backend.gallery.destroy', $gallery->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
