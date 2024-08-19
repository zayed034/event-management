@extends('backend.layouts.main')
@section('main-container')

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-1 text-gray-800">Welcome!</h1>
            <p class="mb-4">Our Event Booking Area. </p>

          </div>
          <!-- /.container-fluid -->
          <div class="container">
             <div class="row">
               <div class="col-md-6">
                <form>
                <div class="mb-3">
                  <label for="name" class="form-label">Heading Title:</label>
                  <input type="text" class="form-control" id="exampleInput" placeholder="Enter your Heading Title">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Option Text:</label>
                 <input type="text" class="form-control" id="exampleInput" placeholder="Enter your Option Text">
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