@extends('backend.layouts.main')
@section('main-container')

<div class="container-fluid">
    <h1 class="h3 mb-1 text-gray-800">Welcome!</h1>
    <p class="mb-4">Our Blog Details Area.</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('blog-details.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="s_title" class="form-label">Sub Title:</label>
                    <input type="text" class="form-control" name="s_title" id="s_title" placeholder="Enter your Heading Title">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter your Option Text">
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">Blog Images:</label>
                    <input type="file" class="form-control" name="image" id="file">
                </div>
                <div class="mb-3">
                    <label for="date_time">Post (date and time):</label>
                    <input type="datetime-local" id="date_time" name="date_time">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category:</label>
                    <input type="text" class="form-control" name="category" id="category" placeholder="Enter your Heading Title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea class="form-control" name="description" id="description" placeholder="Enter your description" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label for="d_title" class="form-label">Desc. Title:</label>
                    <input type="text" class="form-control" name="d_title" id="d_title" placeholder="Enter your Heading Title">
                </div>
                <div class="mb-3">
                    <label for="list" class="form-label">List Item:</label>
                    <input type="text" class="form-control" name="list" id="list" placeholder="Enter your Heading Title">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="admin-backend">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="hed-table">
                            <th>Sub Title</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Date & Time</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>D-Title</th>
                            <th>List text</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                        <tr>
                            <td>{{ $blog->s_title }}</td>
                            <td>{{ $blog->title }}</td>
                            <td><img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}" width="50"></td>
                            <td>{{ $blog->date_time }}</td>
                            <td>{{ $blog->category }}</td>
                            <td>{{ $blog->description }}</td>
                            <td>{{ $blog->d_title }}</td>
                            <td>{{ $blog->list }}</td>
                            <td>
                                <a href="{{ route('blog-details.edit', $blog->id) }}" class="btn btn-info">Edit</a>
                                <form action="{{ route('blog-details.destroy', $blog->id) }}" method="POST" style="display:inline;">
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
