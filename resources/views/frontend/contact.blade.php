@extends('frontend.layouts.app')

@section('title', 'Contact Us')

@section('content')


<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
    <div class="container text-center py-5">

        <h1 class="text-white display-1">Contact</h1>

        <div class="d-inline-flex text-white mb-5">
            <p class="m-0 text-uppercase">
                <a class="text-white" href="{{ route('home') }}">Home</a>
            </p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <p class="m-0 text-uppercase">Contact</p>
        </div>

        <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
            <div class="input-group">

                <div class="input-group-prepend">
                    <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" 
                        type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Courses
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Courses 1</a>
                        <a class="dropdown-item" href="#">Courses 2</a>
                        <a class="dropdown-item" href="#">Courses 3</a>
                    </div>
                </div>

                <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Keyword">

                <div class="input-group-append">
                    <button class="btn btn-secondary px-4 px-lg-5">Search</button>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- Header End -->



<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                    <div class="d-flex align-items-center mb-5">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <h4>Our Location</h4>
                            <p class="m-0">123 Street, New York, USA</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-5">
                        <div class="btn-icon bg-secondary mr-4">
                            <i class="fa fa-2x fa-phone-alt text-white"></i>
                        </div>
                        <div>
                            <h4>Call Us</h4>
                            <p class="m-0">+012 345 6789</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="btn-icon bg-warning mr-4">
                            <i class="fa fa-2x fa-envelope text-white"></i>
                        </div>
                        <div>
                            <h4>Email Us</h4>
                            <p class="m-0">info@example.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Need Help?</h6>
                    <h1 class="display-4">Send Us A Message</h1>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.submit') }}">
                    @csrf

                    <div class="row">
                        <div class="col-6 form-group">
                            <input type="text" name="name" class="form-control border-0 border-bottom"
                                   placeholder="Your Name" required>
                        </div>

                        <div class="col-6 form-group">
                            <input type="email" name="email" class="form-control border-0 border-bottom"
                                   placeholder="Your Email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="subject" class="form-control border-0 border-bottom"
                               placeholder="Subject" required>
                    </div>

                    <div class="form-group">
                        <textarea name="message" rows="5"
                                  class="form-control border-0 border-bottom"
                                  placeholder="Message" required></textarea>
                    </div>

                    <button class="btn btn-primary py-3 px-5">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection
