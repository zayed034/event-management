@extends('backend.layouts.main')
@section('main-container')

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-1 text-gray-800">Welcome!</h1>
            <p class="mb-4">Know About Us.</p>  
          </div>


          <!-- /.container-fluid -->

          <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <form>
                <div class="mb-3">
                  <label for="name" class="form-label">Title:</label>
                 <input type="text" class="form-control" id="exampleInput" placeholder="Enter your Heading Title">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Description:</label>
                  <textarea class="form-control" id="name" placeholder="Enter your description" rows="2"></textarea>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Sub Description:</label>
                  <textarea class="form-control" id="name" placeholder="Enter your sub description" rows="2"></textarea>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Worldwide Shipping:</label>
                  <textarea class="form-control" id="name" placeholder="Enter your Worldwide Shipping" rows="2"></textarea>
                </div>
                <div class="mb-3">
                  <label for="file" class="form-label">Images:</label>
                  <input type="file" class="form-control" id="file">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
                </div>
                <div class="col-md-6"></div>
              </div>
            </div>
        </div>
        <!-- End of Main Content -->


        @endsection
