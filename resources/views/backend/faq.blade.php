@extends('backend.layouts.main')
@section('main-container')

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-1 text-gray-800">Welcome!</h1>
            <p class="mb-4">Our Frequently Asked Questions. </p>  
          </div>


          <!-- /.container-fluid -->

          <div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('backend.faq.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter your Title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" placeholder="Enter your description" rows="2"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
            <div class="admin-backend">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr class="hed-table">
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($faqs as $faq)
                        <tr>
                            <td>{{ $faq->title }}</td>
                            <td>{{ $faq->description }}</td>
                            <td>
                                <a href="{{ route('backend.faq.edit', $faq->id) }}" class="btn btn-info">Edit</a>
                                <form action="{{ route('backend.faq.destroy', $faq->id) }}" method="POST" style="display:inline;">
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