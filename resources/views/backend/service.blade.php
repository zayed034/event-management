@extends('backend.layouts.main')
@section('main-container')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Welcome!</h1>
    <p class="mb-4">Our Service Area. </p>

    <!-- Form -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="m_image" class="form-label">Main Images:</label>
                        <input type="file" class="form-control" name="m_image" id="m_image">
                    </div>
                    <div class="mb-3">
                        <label for="t_image" class="form-label">Top Images:</label>
                        <input type="file" class="form-control" name="t_image" id="t_image">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter your Title">
                    </div>
                    <div class="mb-3">
                        <label for="sub_title" class="form-label">Sub Title</label>
                        <input type="text" class="form-control" name="sub_title" id="sub_title" placeholder="Enter your Sub Title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea class="form-control" name="description" id="description" placeholder="Enter your description" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="list_text" class="form-label">List Text</label>
                        <input type="text" class="form-control" name="list_text" id="list_text" placeholder="Enter your List Text">
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
                                <th>Top Image</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Description</th>
                                <th>List</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                                <tr>
                                    <td><img src="{{ asset('storage/' . $service->m_image) }}" width="50"></td>
                                    <td><img src="{{ asset('storage/' . $service->t_image) }}" width="50"></td>
                                    <td>{{ $service->title }}</td>
                                    <td>{{ $service->sub_title }}</td>
                                    <td>{{ $service->description }}</td>
                                    <td>{{ $service->list_text }}</td>
                                    <td>
                                        <a href="{{ route('services.edit', $service->id) }}" class="btn btn-info">Edit</a>
                                        <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline-block;">
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
</div>
<!-- End of Main Content -->

@endsection
