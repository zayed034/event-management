@extends('backend.layouts.main')
@section('main-container')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Welcome!</h1>
    <p class="mb-4">Our Contacts Area</p>
</div>

<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('backend.contact.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">Your Number:</label>
                    <input type="text" class="form-control" name="number" id="number" placeholder="Enter your number" required>
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Your Country:</label>
                    <input type="text" class="form-control" name="country" id="country" placeholder="Enter your country" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Your Message:</label>
                    <textarea class="form-control" name="message" id="message" placeholder="Enter your message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
            <!-- This part is unnecessary and should be removed from the blade file -->
        </div>
    </div>
</div>

@endsection
