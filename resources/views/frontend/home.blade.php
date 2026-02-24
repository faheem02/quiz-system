@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative mb-0">
        <div class="container text-center py-5">

            <h1 class="text-white mt-4 mb-4">
                Pass Your Taxi Test First Time
            </h1>

            <h1 class="text-white display-1 mb-5">
                Medway & Thanet Council
            </h1>

            <div class="mx-auto mb-5" style="max-width: 600px;">
                <div class="input-group">

                    <div class="input-group-prepend">
                        <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle"
                            data-toggle="dropdown">
                            Select Council
                        </button>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Medway Council</a>
                            <a class="dropdown-item" href="#">Thanet Council</a>
                        </div>
                    </div>

                    <input type="text" class="form-control border-light" placeholder="Keyword" style="padding: 30px 25px;">

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
                        <img src="{{ asset('frontend/img/about.jpg') }}" class="position-absolute w-100 h-100"
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
                            Your Trusted Partner for Taxi Test Preparation
                        </h1>
                    </div>

                    <p>
                        TaxiTestPrep is your trusted partner for taxi driver licence preparation
                        in Kent. We specialise in helping aspiring taxi drivers pass their
                        Medway Council and Thanet Council licensing tests on their first attempt.
                    </p>
                    <p>
                        Our comprehensive practice tests cover local knowledge, Highway Code,
                        and everything you need to become a licensed taxi driver in Medway
                        and Thanet.
                    </p>
                    <div class="row pt-3 mx-0">

                        <div class="col-3 px-0">
                            <div class="bg-success text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">500</h1>
                                <h6 class="text-uppercase text-white">
                                    Practice
                                    <span class="d-block">Questions</span>
                                </h6>
                            </div>
                        </div>

                        <div class="col-3 px-0">
                            <div class="bg-primary text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">2</h1>
                                <h6 class="text-uppercase text-white">
                                    Council
                                    <span class="d-block">Areas</span>
                                </h6>
                            </div>
                        </div>

                        <div class="col-3 px-0">
                            <div class="bg-secondary text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">100</h1>
                                <h6 class="text-uppercase text-white">
                                    Success
                                    <span class="d-block">Rate %</span>
                                </h6>
                            </div>
                        </div>

                        <div class="col-3 px-0">
                            <div class="bg-warning text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">150</h1>
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
                        <h1 class="display-4">Why You Should Prepare with TaxiTestPrep?</h1>
                    </div>

                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-check-circle text-white"></i>
                        </div>
                        <div>
                            <h4>Realistic Practice Tests</h4>
                            <p>Questions designed to mirror actual Medway and Thanet council tests, giving you real exam
                                experience.</p>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-secondary mr-4">
                            <i class="fa fa-map-marked-alt text-white"></i>
                        </div>
                        <div>
                            <h4>Local Knowledge Coverage</h4>
                            <p>Comprehensive coverage of streets, landmarks, and routes specific to Medway and Thanet areas.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-warning mr-4">
                            <i class="fa fa-chart-line text-white"></i>
                        </div>
                        <div>
                            <h4>Track Your Progress</h4>
                            <p>Monitor your scores, identify weak areas, and build confidence before your actual test.</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="btn-icon bg-success mr-4">
                            <i class="fa fa-mobile-alt text-white"></i>
                        </div>
                        <div>
                            <h4>Practice Anywhere</h4>
                            <p>Access your tests on any device - desktop, tablet, or mobile. Study on the go!</p>
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
            <h6 class="text-secondary text-uppercase pb-2">Our Practice Tests</h6>
            <h1 class="display-4">Choose Your Council Area</h1>
            <p class="lead mt-3">Select the practice test that matches your licensing requirements</p>
        </div>

        <div class="owl-carousel courses-carousel">
            @foreach($courses ?? [] as $course)
                <div class="courses-item position-relative">
                    <img class="img-fluid" src="{{ asset('frontend/img/' . $course->image) }}">
                    <div class="courses-text">
                        <h4 class="text-center text-white px-3">{{ $course->title }}</h4>
                        <div class="border-top mt-3">
                            <div class="d-flex justify-content-between p-4 text-white">
                                <span><i class="fa fa-question-circle mr-2"></i>{{ $course->total_questions ?? '100+' }}
                                    Questions</span>
                                <span><i class="fa fa-star mr-2"></i>{{ $course->rating }} ({{ $course->reviews }})</span>
                            </div>
                        </div>
                        <div class="bg-white text-center p-4">
                            <h5 class="mb-3 text-primary">£{{ number_format($course->price ?? 19.99, 2) }}</h5>
                            <a class="btn btn-primary" href="{{ route('courses.show', $course->id) }}">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('courses.index') }}" class="btn btn-secondary btn-lg px-5">
                View All Courses
            </a>
        </div>
    </div>
    <!-- Courses End -->

    <!-- How It Works Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h6 class="text-secondary text-uppercase pb-2">Simple Process</h6>
                <h1 class="display-4">Get Started in 3 Easy Steps</h1>
            </div>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <div class="btn-icon bg-primary mx-auto mb-4" style="width: 80px; height: 80px;">
                            <h2 class="text-white mb-0">1</h2>
                        </div>
                        <h4>Choose Your Council</h4>
                        <p class="px-3">
                            Select Medway Council or Thanet Council and pick your test type
                            (Knowledge Test or Highway Code).
                        </p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <div class="btn-icon bg-secondary mx-auto mb-4" style="width: 80px; height: 80px;">
                            <h2 class="text-white mb-0">2</h2>
                        </div>
                        <h4>Practice & Learn</h4>
                        <p class="px-3">
                            Take unlimited practice tests with instant feedback. Learn from
                            detailed explanations for every question.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <div class="btn-icon bg-success mx-auto mb-4" style="width: 80px; height: 80px;">
                            <h2 class="text-white mb-0">3</h2>
                        </div>
                        <h4>Pass Your Test</h4>
                        <p class="px-3">
                            Build confidence and pass your taxi licence test first time
                            with our proven preparation method.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- How It Works End -->


    <!-- Contact Preview Start -->
    <div class="container-fluid py-5 bg-primary">
        <div class="container text-center">
            <h1 class="text-white mb-4">Ready to Start Your Journey?</h1>
            <p class="text-white lead mb-4">
                Join hundreds of successful taxi drivers in Medway and Thanet who passed their tests with TaxiTestPrep
            </p>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="bg-white p-4 rounded mb-4">
                        <h5 class="text-primary mb-3">Get Instant Access To:</h5>
                        <div class="row text-left">
                            <div class="col-md-6">
                                <p class="mb-2"><i class="fa fa-check text-success mr-2"></i>Unlimited practice questions
                                </p>
                                <p class="mb-2"><i class="fa fa-check text-success mr-2"></i>Knowledge Test preparation</p>
                                <p class="mb-2"><i class="fa fa-check text-success mr-2"></i>Highway Code practice</p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-2"><i class="fa fa-check text-success mr-2"></i>Progress tracking</p>
                                <p class="mb-2"><i class="fa fa-check text-success mr-2"></i>Mobile-friendly platform</p>
                                <p class="mb-2"><i class="fa fa-check text-success mr-2"></i>24/7 access</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('courses.index') }}" class="btn btn-secondary btn-lg px-5 py-3">
                View Courses & Pricing
            </a>
            <p class="text-white mt-3">
                <small>Questions? <a href="{{ route('contact') }}" class="text-white"><u>Contact us</u></a></small>
            </p>
        </div>
    </div>
    <!-- Contact Preview End -->
@endsection