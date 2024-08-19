@extends('backend.layouts.main')

@section('main-container')
<div class="container">
    <h1 class="h3 mb-1 text-gray-800">Testimonials</h1>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('backend.testimonial.create') }}" class="btn btn-primary mb-3">Add Testimonial</a>

            <div class="admin-backend">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonials as $testimonial)
                        <tr>
                            <td>{{ $testimonial->description }}</td>
                            <td>{{ $testimonial->name }}</td>
                            <td>{{ $testimonial->designation }}</td>
                            <td>
                                <a href="{{ route('backend.testimonial.edit', $testimonial->id) }}" class="btn btn-info">Edit</a>
                                <form action="{{ route('backend.testimonial.destroy', $testimonial->id) }}" method="POST" style="display: inline-block;">
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
