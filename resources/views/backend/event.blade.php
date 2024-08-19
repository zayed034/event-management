@extends('backend.layouts.main')
@section('main-container')

<div class="container-fluid">
    <h1 class="h3 mb-1 text-gray-800">Welcome!</h1>
    <p class="mb-4">Our Event Area.</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            {{--  <a href="{{ route('events.create') }}" class="btn btn-primary mb-3">Add New Event</a>  --}}
            <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="day" class="form-label">Day:</label>
                    <input type="text" class="form-control" name="day" id="day" placeholder="Enter the Day">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Brand Images:</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter the Title">
                </div>
                <div class="mb-3">
                    <label for="sub_title" class="form-label">Sub Title:</label>
                    <input type="text" class="form-control" name="sub_title" id="sub_title" placeholder="Enter the Sub Title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea class="form-control" name="description" id="description" placeholder="Enter the Description" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label for="s_name" class="form-label">Speaker Name:</label>
                    <input type="text" class="form-control" name="s_name" id="s_name" placeholder="Enter the Speaker Name">
                </div>
                <div class="mb-3">
                    <label for="seat" class="form-label">Seat:</label>
                    <input type="text" class="form-control" name="seat" id="seat" placeholder="Enter the Seat">
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
                            <th>Day</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Description</th>
                            <th>Speaker Name</th>
                            <th>Seat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                        <tr>
                            <td>{{ $event->day }}</td>
                            <td><img src="{{ asset('backend/img/' . $event->image) }}" alt="{{ $event->title }}" width="50"></td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->sub_title }}</td>
                            <td>{{ $event->description }}</td>
                            <td>{{ $event->s_name }}</td>
                            <td>{{ $event->seat }}</td>
                            <td>
                                <a href="{{ route('events.edit', $event->id) }}" class="btn btn-info">Edit</a>
                                <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="d-inline">
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
