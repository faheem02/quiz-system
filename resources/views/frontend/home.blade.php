@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')


<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom mb-0">
    <div class="container text-center py-5">

        <h1 class="text-white mt-4 mb-4">
            Learn From Home
        </h1>

        <h1 class="text-white display-1 mb-5">
            Education Courses
        </h1>

        <div class="mx-auto mb-5" style="max-width: 600px;">
            <div class="input-group">

                <div class="input-group-prepend">
                    <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle"
                            data-toggle="dropdown">
                        Courses
                    </button>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Course 1</a>
                        <a class="dropdown-item" href="#">Course 2</a>
                        <a class="dropdown-item" href="#">Course 3</a>
                    </div>
                </div>

                <input
                    type="text"
                    class="form-control border-light"
                    placeholder="Keyword"
                    style="padding: 30px 25px;">

                <div class="input-group-append">
                    <button class="btn btn-secondary px-4 px-lg-5">
                        Search
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Header End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">

            <!-- About Image -->
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img src="{{ asset('frontend/img/about.jpg') }}"
                         class="position-absolute w-100 h-100"
                         style="object-fit: cover;">
                </div>
            </div>

            <!-- About Content -->
            <div class="col-lg-7">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">
                        About Us
                    </h6>
                    <h1 class="display-4">
                        First Choice For Online Education Anywhere
                    </h1>
                </div>

                <p>
                    Tempor erat elitr at rebum at at clita aliquyam consetetur.
                    Diam dolor diam ipsum et tempor voluptua sit consetetur sit.
                </p>

                <div class="row pt-3 mx-0">

                    <div class="col-3 px-0">
                        <div class="bg-success text-center p-4">
                            <h1 class="text-white" data-toggle="counter-up">123</h1>
                            <h6 class="text-uppercase text-white">
                                Available
                                <span class="d-block">Subjects</span>
                            </h6>
                        </div>
                    </div>

                    <div class="col-3 px-0">
                        <div class="bg-primary text-center p-4">
                            <h1 class="text-white" data-toggle="counter-up">1234</h1>
                            <h6 class="text-uppercase text-white">
                                Online
                                <span class="d-block">Courses</span>
                            </h6>
                        </div>
                    </div>

                    <div class="col-3 px-0">
                        <div class="bg-secondary text-center p-4">
                            <h1 class="text-white" data-toggle="counter-up">123</h1>
                            <h6 class="text-uppercase text-white">
                                Skilled
                                <span class="d-block">Instructors</span>
                            </h6>
                        </div>
                    </div>

                    <div class="col-3 px-0">
                        <div class="bg-warning text-center p-4">
                            <h1 class="text-white" data-toggle="counter-up">1234</h1>
                            <h6 class="text-uppercase text-white">
                                Happy
                                <span class="d-block">Students</span>
                            </h6>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- About End -->

<!-- Feature Start -->
<div class="container-fluid bg-image my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 py-5">
                <div class="section-title mb-4">
                    <h6 class="text-secondary text-uppercase pb-2">Why Choose Us?</h6>
                    <h1 class="display-4">Why You Should Start Learning with Us?</h1>
                </div>

                <div class="d-flex mb-3">
                    <div class="btn-icon bg-primary mr-4">
                        <i class="fa fa-graduation-cap text-white"></i>
                    </div>
                    <div>
                        <h4>Skilled Instructors</h4>
                        <p>Professional instructors with real-world experience.</p>
                    </div>
                </div>

                <div class="d-flex mb-3">
                    <div class="btn-icon bg-secondary mr-4">
                        <i class="fa fa-certificate text-white"></i>
                    </div>
                    <div>
                        <h4>International Certificate</h4>
                        <p>Get certificates recognized worldwide.</p>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="btn-icon bg-warning mr-4">
                        <i class="fa fa-book-reader text-white"></i>
                    </div>
                    <div>
                        <h4>Online Classes</h4>
                        <p>Learn anytime from anywhere.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5" style="min-height: 500px;">
                <img class="w-100 h-100" src="{{ asset('frontend/img/feature.jpg') }}" style="object-fit: cover;">
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Courses Start -->
<div class="container-fluid py-5">
    <div class="section-title text-center mb-5">
        <h6 class="text-secondary text-uppercase pb-2">Our Courses</h6>
        <h1 class="display-4">Checkout Our Latest Courses</h1>
    </div>

    <div class="owl-carousel courses-carousel">
        @foreach($courses ?? [] as $course)
            <div class="courses-item position-relative">
                <img class="img-fluid" src="{{ asset('frontend/img/'.$course->image) }}">
                <div class="courses-text">
                    <h4 class="text-center text-white">{{ $course->title }}</h4>
                    <div class="border-top mt-3">
                        <div class="d-flex justify-content-between p-4 text-white">
                            <span><i class="fa fa-user mr-2"></i>{{ $course->instructor }}</span>
                            <span><i class="fa fa-star mr-2"></i>{{ $course->rating }}</span>
                        </div>
                    </div>
                    <div class="bg-white text-center p-4">
                        <a class="btn btn-primary" href="{{ route('courses.show',$course->id) }}">
                            Course Detail
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- Courses End -->


<!-- Contact Preview Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container text-center">
        <h1 class="mb-4">Need Help?</h1>
        <a href="{{ route('contact') }}" class="btn btn-primary px-5 py-3">
            Contact Us
        </a>
    </div>
</div>
<!-- Contact Preview End -->

@endsection
