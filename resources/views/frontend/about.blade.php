@extends('frontend.layouts.app')

@section('title', 'About Us')

@section('content')

    <!-- Page Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom mb-0">
        <div class="container text-center py-5">

            <h1 class="text-white display-1">
                About Us
            </h1>

            <!-- Breadcrumb -->
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase">
                    <a class="text-white" href="{{ route('home') }}">Home</a>
                </p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">
                    About
                </p>
            </div>

            <!-- Search Box -->
            <div class="mx-auto mb-5" style="max-width: 600px;">
                <div class="input-group">

                    <div class="input-group-prepend">
                        <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button"
                            data-toggle="dropdown">
                            Select Council
                        </button>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Medway Council</a>
                            <a class="dropdown-item" href="#">Thanet Council</a>
                        </div>
                    </div>

                    <input type="text" class="form-control border-light" placeholder="Search courses"
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
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <!-- Image Section -->
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('frontend/img/about.jpg') }}"
                            style="object-fit: cover;" alt="About TaxiTestPrep">
                    </div>
                </div>

                <!-- Content Section -->
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">About Us</h6>
                        <h1 class="display-4">Your Trusted Partner for Taxi Test Preparation</h1>
                    </div>

                    <p>
                        At TaxiTestPrep, we understand the challenges aspiring taxi drivers face when
                        preparing for their licensing tests. Founded by industry professionals with
                        extensive knowledge of Medway and Thanet council requirements, we've created
                        a comprehensive online platform to help you succeed.
                    </p>

                    <h5 class="mb-3">Our Mission</h5>
                    <p class="mb-4">
                        To provide the most effective, accessible, and affordable test preparation
                        resources for taxi driver licence applicants in Kent.
                    </p>

                    <!-- Counter Section -->
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
    {{-- <div class="container-fluid py-5">
        <div class="container py-5">

            <div class="row">

                <!-- Text Content -->
                <div class="col-lg-7 mb-5 mb-lg-0">

                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">
                            Why Choose Us?
                        </h6>
                        <h1 class="display-4">
                            What Makes TaxiTestPrep Different
                        </h1>
                    </div>

                    <p class="mb-4 pb-2">
                        We're not just another test prep website. TaxiTestPrep is built by people
                        who understand the taxi licensing process inside out. Our platform is designed
                        specifically for Medway and Thanet council requirements, giving you the exact
                        preparation you need to pass first time.
                    </p>

                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-check-circle text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Council-Specific Tests</h4>
                            <p>Questions tailored specifically for Medway and Thanet council examinations,
                                not generic practice materials.</p>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-secondary mr-4">
                            <i class="fa fa-2x fa-map-marked-alt text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Local Knowledge Coverage</h4>
                            <p>Comprehensive coverage of streets, landmarks, routes, hospitals, and stations
                                specific to your council area.</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="btn-icon bg-warning mr-4">
                            <i class="fa fa-2x fa-chart-line text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Track Your Progress</h4>
                            <p>Monitor your scores, identify weak areas, and build confidence before your
                                actual test with detailed performance tracking.</p>
                        </div>
                    </div>

                </div>

                <!-- Image -->
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img src="{{ asset('frontend/img/feature.jpg') }}" class="position-absolute w-100 h-100"
                            style="object-fit: cover;" alt="Why Choose TaxiTestPrep">
                    </div>
                </div>

            </div>

        </div>
    </div> --}}
    <!-- Feature End -->

    <!-- What We Offer Start -->
    {{-- <div class="container-fluid py-5 bg-light ">
        <div class="container py-5">
            <div class="section-title text-center mb-5">
                <h6 class="text-secondary text-uppercase pb-2">Our Coverage</h6>
                <h1 class="display-4">What We Offer</h1>
            </div>

            <div class="row"> --}}
                {{-- <div class="col-md-6 mb-4">
                    <div class="d-flex align-items-start">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-map-marked-alt text-white"></i>
                        </div>

                        <div>
                            <h4>Medway Council Tests</h4>
                            <p>
                                Complete preparation for Medway Council taxi licensing tests,
                                covering Rochester, Chatham, Gillingham, Rainham, and Strood areas.
                            </p>
                        </div>
                    </div>
                </div> --}}
               

                {{-- <div class="col-md-6 mb-4">
                    <div class="d-flex">
                        <div class="btn-icon bg-secondary mr-4">
                            <i class="fa fa-2x fa-map-marked-alt text-white"></i>
                        </div>
                        <div>
                            <h4>Thanet Council Tests</h4>
                            <p>
                                Comprehensive practice for Thanet Council licensing, including
                                Margate, Broadstairs, Ramsgate, and surrounding coastal areas.
                            </p>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-6 mb-4">
                    <div class="d-flex">
                        <div class="btn-icon bg-success mr-4">
                            <i class="fa fa-2x fa-road text-white"></i>
                        </div>
                        <div>
                            <h4>Highway Code Practice</h4>
                            <p>
                                Essential Highway Code preparation required for all taxi driver
                                licence applications. Updated regularly with current regulations.
                            </p>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-6 mb-4">
                    <div class="d-flex">
                        <div class="btn-icon bg-warning mr-4">
                            <i class="fa fa-2x fa-book-open text-white"></i>
                        </div>
                        <div>
                            <h4>Local Knowledge Tests</h4>
                            <p>
                                Detailed coverage of streets, landmarks, routes, hospitals,
                                stations, and key locations in your council area.
                            </p>
                        </div>
                    </div>
                </div> --}}
            {{-- </div>
        </div>
    </div> --}}
    <!-- What We Offer End -->


    <!-- Statistics Start -->
    <div class="container-fluid py-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <div class="text-center">
                        <h1 class="text-white mb-2" data-toggle="counter-up">500</h1>
                        <h5 class="text-white">Practice Questions</h5>
                    </div>
                </div>

                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <div class="text-center">
                        <h1 class="text-white mb-2" data-toggle="counter-up">2</h1>
                        <h5 class="text-white">Council Areas</h5>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="text-center">
                        <h1 class="text-white mb-2" data-toggle="counter-up">100</h1>
                        <h5 class="text-white">Success Rate %</h5>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="text-center">
                        <h1 class="text-white mb-2" data-toggle="counter-up">150</h1>
                        <h5 class="text-white">Happy Students</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Statistics End -->

    <!-- Why Choose Us Start -->
    <div class="container-fluid py-5 ">
        <div class="container py-5">
            <div class="row">

                <!-- Text Content -->
                <div class="col-lg-7 mb-5 mb-lg-0">

                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">
                            Our Advantage
                        </h6>
                        <h1 class="display-4">
                            What Makes Us Different
                        </h1>
                    </div>

                    <p class="mb-4">
                        We're not just another test prep website. TaxiTestPrep is built by people
                        who understand the taxi licensing process inside out. Our platform is designed
                        specifically for Medway and Thanet council requirements.
                    </p>

                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-check-circle text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Council-Specific Preparation</h4>
                            <p>
                                Questions tailored specifically for Medway and Thanet council tests,
                                not generic practice materials.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-secondary mr-4">
                            <i class="fa fa-2x fa-sync text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Regular Updates</h4>
                            <p>
                                Our content is continuously updated to reflect current council
                                requirements and regulations.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-success mr-4">
                            <i class="fa fa-2x fa-pound-sign text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Affordable Pricing</h4>
                            <p>
                                Quality preparation shouldn't break the bank. We offer competitive
                                pricing for all aspiring drivers.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="btn-icon bg-warning mr-4">
                            <i class="fa fa-2x fa-clock text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>24/7 Access</h4>
                            <p>
                                Study at your own pace, anytime, anywhere. Your subscription gives
                                you unlimited access to all practice materials.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Image -->
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img src="{{ asset('frontend/img/feature.jpg') }}" class="position-absolute w-100 h-100"
                            style="object-fit: cover;" alt="Why Choose TaxiTestPrep">
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Why Choose Us End -->


@endsection