@extends('backend.layouts.main')
@section('main-container')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Welcome!</h1>
    <p class="mb-4">Our Speaker Area. </p>
</div>
<!-- /.container-fluid -->

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('speakers.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="file" class="form-label">Main Images:</label>
                    <input type="file" class="form-control" name="m_image" id="speake_main_image">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="speake_title" placeholder="Enter your Title">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="speake_name" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="experience" class="form-label">Experience</label>
                    <input type="text" class="form-control" name="experience" id="speake_experience" placeholder="Enter your experience">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <input type="text" class="form-control" name="description" id="speake_description" placeholder="Enter your description">
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">Your Images:</label>
                    <input type="file" class="form-control" name="image" id="speake_image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
            <div class="admin-backend">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="hed-table">
                            <th>Main Image</th>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Experience</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($speakers as $speaker)
                        <tr>
                            <td><img src="{{ asset('storage/' . $speaker->m_image) }}" width="100"></td>
                            <td>{{ $speaker->title }}</td>
                            <td>{{ $speaker->name }}</td>
                            <td>{{ $speaker->experience }}</td>
                            <td>{{ $speaker->description }}</td>
                            <td><img src="{{ asset('storage/' . $speaker->image) }}" width="100"></td>
                            <td>
                                <a href="{{ route('speakers.edit', $speaker->id) }}" class="btn btn-info">Edit</a>
                                <form action="{{ route('speakers.destroy', $speaker->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
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
