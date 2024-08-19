@extends('backend.layouts.main')
@section('main-container')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Welcome!</h1>
    <p class="mb-4">Our Event Details Area.</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('event-details.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="s_title" class="form-label">Sub Title:</label>
                    <input type="text" class="form-control" name="s_title" id="s_title" placeholder="Enter your Heading Title" required>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter your Option Text" required>
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">Blog Images:</label>
                    <input type="file" class="form-control" name="image" id="file" required>
                </div>
                <div class="mb-3">
                    <label for="e_date" class="form-label">Event Date</label>
                    <input type="date" class="form-control" name="e_date" id="e_date" placeholder="Enter your date" required>
                </div>
                <div class="mb-3">
                    <label for="e_time" class="form-label">Event time</label>
                    <input type="time" class="form-control" name="e_time" id="e_time" placeholder="Enter your time" required>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" name="location" id="location" placeholder="Enter your location" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Description:</label>
                    <textarea class="form-control" name="description" id="message" placeholder="Enter your description" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="admin-backend">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="hed-table">
                            <th>Sub Title</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Event Date</th>
                            <th>Event Time</th>
                            <th>Location</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($eventdetails as $eventdetail)
                        <tr>
                            <td>{{ $eventdetail->s_title }}</td>
                            <td>{{ $eventdetail->title }}</td>
                            <td><img src="{{ asset('backend/img/' . $eventdetail->image) }}" width="100" alt="{{ $eventdetail->title }}"></td>
                            <td>{{ $eventdetail->e_date }}</td>
                            <td>{{ $eventdetail->e_time }}</td>
                            <td>{{ $eventdetail->location }}</td>
                            <td>{{ $eventdetail->description }}</td>
                            <td>
                                <a href="{{ route('event-details.edit', $eventdetail->id) }}" class="btn btn-info">Edit</a>
                                <form action="{{ route('event-details.destroy', $eventdetail->id) }}" method="POST" style="display:inline-block;">
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
