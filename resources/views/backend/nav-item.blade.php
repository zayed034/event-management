@extends('backend.layouts.main')
@section('main-container')

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Welcome!</h1>
            <p class="mb-4">Our Nav Area.</p>
          </div>

          <div class="container mt-5">
            <div class="row">
              <div class="col-md-6">
                <form>
                  <div class="mb-3">
                    <label for="exampleFormControlFile" class="form-label">Logo Image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile"/>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInput" class="form-label">Header Item</label>
                    <input type="text"class="form-control" id="exampleInput" placeholder="Enter your text"/>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInput" class="form-label">Sub Item</label>
                    <input type="text" class="form-control" id="exampleInput" placeholder="Enter your text">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Main Content -->

        @endsection