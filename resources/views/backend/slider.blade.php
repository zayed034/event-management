@extends('backend.layouts.main')
@section('main-container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Welcome!</h1>
                    </div>
                    <p class="mb-4">Our Slider Area.</p>

                    

                </div>
                <!-- /.container-fluid -->

                <div class="container mt-5">
                    <div class="row">
                    <div class="col-md-6">
                        <form>
                        <div class="mb-3">
                            <label for="file" class="form-label">Slider Images:</label>
                            <input type="file" class="form-control" id="main">
                        </div>
                         <div class="mb-3">
                            <label for="birthdaytime">Date and time:</label>
                            <input type="datetime-local" id="birthdaytime" name="birthdaytime">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInput" class="form-label">Event Name</label>
                            <input type="text" class="form-control" id="exampleInput" placeholder="Enter your text">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInput" class="form-label">Event Title</label>
                            <input type="text" class="form-control" id="exampleInput" placeholder="Enter your text">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInput" class="form-label">Event Location</label>
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