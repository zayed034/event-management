@extends('backend.layouts.main')
@section('main-container')

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-1 text-gray-800">Welcome!</h1>
  <p class="mb-4">Our Blog Area. </p>
</div>
<!-- /.container-fluid -->
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="birthdaytime">(Date & Time):</label>
          <input type="datetime-local" id="birthdaytime" name="Date_time" required>
        </div>
        <div class="mb-3">
          <label for="file" class="form-label">Blog Images:</label>
          <input type="file" class="form-control" name="image" id="file" required>
        </div>
        <div class="mb-3">
          <label for="sub_title" class="form-label">Sub Title:</label>
          <input type="text" class="form-control" name="sub_title" id="sub_title" placeholder="Enter your Heading Title" required>
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Enter your Option Text" required>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description:</label>
          <textarea class="form-control" name="description" id="description" placeholder="Enter your description" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <div class="col-md-6">
       <div class="admin-backend">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="hed-table">
                            <th>Date & Time</th>
                            <th>Image</th>
                            <th>Sub Title</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                          <tr>
                              <td>{{ date('F d, Y H:i', strtotime($blog->Date_time)) }}</td>
                              <td><img src="{{ asset('backend/img/' . $blog->image) }}" width="100"></td>
                              <td>{{ $blog->sub_title }}</td>
                              <td>{{ $blog->title }}</td>
                              <td>{{ $blog->description }}</td>
                              <td>
                                  <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-info">Edit</a>
                                  <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
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
<!-- End of Main Content -->

@endsection
