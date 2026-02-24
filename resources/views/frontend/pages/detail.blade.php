@extends('frontend.layouts.app')

@section('title', 'Course Detail')

@section('content')

    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Exam Preparation</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Course Detail</p>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <div class="section-title position-relative mb-5">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Professional Training</h6>
                            <h1 class="display-4">Official Council Knowledge & Highway Code Prep</h1>
                        </div>
                        <img class="img-fluid rounded w-100 mb-4" src="{{ asset('img/header.jpg') }}" alt="Taxi Test Prep">
                        
                        <p>Becoming a professional driver in <strong>Medway or Thanet</strong> requires passing a rigorous knowledge and policy exam. Our platform is designed specifically for new taxi drivers to ensure you are fully prepared for the Hackney Carriage and Private Hire licensing requirements. We break down the official council syllabus into manageable practice modules.</p>

                        <p>Our mock tests simulate the actual exam environment, covering the essential <strong>Highway Code</strong>, local <strong>Byelaws</strong>, and <strong>Safeguarding</strong> protocols required by your licensing authority. Each question is crafted to ensure you understand the "why" behind the rules, giving you the best chance of passing on your first attempt.</p>
                    </div>

                    <h2 class="mb-3">Related Preparation Tests</h2>
                    <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="#">
                            <img class="img-fluid" src="{{ asset('img/courses-1.jpg') }}" alt="">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3">Medway Hackney Carriage Policy Test</h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        <span class="text-white"><i class="fa fa-map-marker-alt mr-2"></i>Medway Council</span>
                                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.9</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="#">
                            <img class="img-fluid" src="{{ asset('img/courses-2.jpg') }}" alt="">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3">Thanet Private Hire Knowledge Prep</h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        <span class="text-white"><i class="fa fa-map-marker-alt mr-2"></i>Thanet Council</span>
                                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.8</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="#">
                            <img class="img-fluid" src="{{ asset('img/courses-3.jpg') }}" alt="">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3">UK Highway Code Professional Standards</h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        <span class="text-white"><i class="fa fa-book mr-2"></i>Highway Code</span>
                                        <span class="text-white"><i class="fa fa-star mr-2"></i>5.0</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="bg-primary mb-5 py-3">
                        <h3 class="text-white py-3 px-4 m-0">Exam Features</h3>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Category</h6>
                            <h6 class="text-white my-3">Council Licensing</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Rating</h6>
                            <h6 class="text-white my-3">4.9 <small>(Latest Updates)</small></h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Modules</h6>
                            <h6 class="text-white my-3">Full Access</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Duration</h6>
                            <h6 class="text-white my-3">Lifetime Access</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Skill level</h6>
                            <h6 class="text-white my-3">New Applicants</h6>
                        </div>
                        <div class="d-flex justify-content-between px-4">
                            <h6 class="text-white my-3">Language</h6>
                            <h6 class="text-white my-3">English</h6>
                        </div>

                        <h5 class="text-white py-3 px-4 m-0">Access Price: £24.99</h5>
                        <div class="py-3 px-4">
                            <button class="btn btn-block btn-secondary py-3 px-5">Enroll Now</button>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h2 class="mb-3">Our Expertise</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="#" class="text-decoration-none h6 m-0">Medway Hackney Prep</a>
                                <span class="badge badge-primary badge-pill">Live</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="#" class="text-decoration-none h6 m-0">Thanet Private Hire</a>
                                <span class="badge badge-primary badge-pill">Live</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="#" class="text-decoration-none h6 m-0">Highway Code Mastery</a>
                                <span class="badge badge-primary badge-pill">Updated</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="#" class="text-decoration-none h6 m-0">Safeguarding Protocols</a>
                                <span class="badge badge-primary badge-pill">Full</span>
                            </li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="mb-4">Recent Modules</h2>
                        <a class="d-flex align-items-center text-decoration-none mb-4" href="#">
                            <img class="img-fluid rounded" src="{{ asset('img/courses-80x80.jpg') }}" alt="" style="width: 80px; height: 80px;">
                            <div class="pl-3">
                                <h6>Medway Local Knowledge & Landmarks</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-map-marked text-primary mr-2"></i>Medway</small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>4.9</small>
                                </div>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none mb-4" href="#">
                            <img class="img-fluid rounded" src="{{ asset('img/courses-80x80.jpg') }}" alt="" style="width: 80px; height: 80px;">
                            <div class="pl-3">
                                <h6>Thanet Driver Conduct & Policy</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-map-marked text-primary mr-2"></i>Thanet</small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>4.8</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

{{-- @extends('frontend.layouts.app')

@section('title', $course->title . ' | Taxi Test Prep UK')

@section('content')

<div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom"
    style="margin-bottom: 90px; margin-top: 100px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-1">Exam Preparation</h1>
        <div class="d-inline-flex text-white mb-5">
            <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <p class="m-0 text-uppercase">Course Detail</p>
        </div>
    </div>
</div>
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-5">
                    <div class="section-title position-relative mb-5">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Professional
                            Training</h6>
                        <h1 class="display-4">{{ $course->title }}</h1>
                    </div>
                    <img class="img-fluid rounded w-100 mb-4" src="{{ asset('frontend/img/' . $course->image) }}"
                        alt="{{ $course->title }}">

                    <h3 class="mb-4">Get Licensed Faster with Targeted Mock Exams</h3>
                    <p>This preparation course is specifically designed for the <strong>{{ $course->council ?? 'local
                            council' }}</strong> knowledge test. As a new driver, navigating the licensing requirements
                        for Medway or Thanet can be daunting. Our platform breaks down the official syllabus into
                        manageable practice modules.</p>

                    <p>Our mock tests simulate the actual exam environment, covering the essential <strong>Highway
                            Code</strong>, local <strong>Byelaws</strong>, and <strong>Safeguarding</strong> protocols
                        required by your licensing authority. Each question is crafted to ensure you understand the
                        "why" behind the rules, giving you the best chance of passing on your first attempt.</p>
                </div>

                <h2 class="mb-3">Related Preparation Tests</h2>
                <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
                    @foreach($relatedCourses as $related)
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2"
                        href="{{ route('pages.detail', $related->id) }}">
                        <img class="img-fluid" src="{{ asset('frontend/img/' . $related->image) }}" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">{{ $related->title }}</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-map-marker-alt mr-2"></i>{{
                                        $related->council }}</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>{{ $related->rating
                                        }}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
                <div class="bg-primary mb-5 py-3">
                    <h3 class="text-white py-3 px-4 m-0">Practice Features</h3>
                    <div class="d-flex justify-content-between border-bottom px-4">
                        <h6 class="text-white my-3">Focus Area</h6>
                        <h6 class="text-white my-3">{{ $course->council ?? 'UK Wide' }}</h6>
                    </div>
                    <div class="d-flex justify-content-between border-bottom px-4">
                        <h6 class="text-white my-3">Rating</h6>
                        <h6 class="text-white my-3">{{ $course->rating }} <small>({{ $course->reviews }})</small></h6>
                    </div>
                    <div class="d-flex justify-content-between border-bottom px-4">
                        <h6 class="text-white my-3">Mock Exams</h6>
                        <h6 class="text-white my-3">Unlimited Access</h6>
                    </div>
                    <div class="d-flex justify-content-between border-bottom px-4">
                        <h6 class="text-white my-3">Topics Covered</h6>
                        <h6 class="text-white my-3">Highway Code, Policy</h6>
                    </div>
                    <div class="d-flex justify-content-between border-bottom px-4">
                        <h6 class="text-white my-3">Language</h6>
                        <h6 class="text-white my-3">English (TFL Standard)</h6>
                    </div>

                    <h5 class="text-white py-3 px-4 m-0">
                        Course Price: £{{ $course->price ?? '24.99' }}
                    </h5>
                    <div class="py-3 px-4">
                        @if(isset($hasPaid) && $hasPaid)
                        <a href="{{ route('quiz.start', $course->id) }}"
                            class="btn btn-block btn-success py-3 px-5 shadow-sm">
                            Start Practice Test 🚗
                        </a>
                        @else
                        <form action="{{ route('paypal.pay') }}" method="POST">
                            @csrf
                            <input type="hidden" name="course_id" value="{{ $course->id }}">
                            <input type="hidden" name="amount" value="{{ $course->price ?? '24.99' }}">
                            <button type="submit" class="btn btn-block btn-secondary py-3 px-5">
                                Unlock Full Exam
                            </button>
                        </form>
                        @endif
                    </div>
                </div>

                <div class="mb-5">
                    <h2 class="mb-3">Council Categories</h2>
                    <ul class="list-group list-group-flush border p-3 bg-light">
                        <li
                            class="list-group-item d-flex justify-content-between align-items-center px-0 bg-transparent">
                            <a href="#" class="text-decoration-none h6 m-0">Medway Hackney</a>
                            <span class="badge badge-primary badge-pill">Full Prep</span>
                        </li>
                        <li
                            class="list-group-item d-flex justify-content-between align-items-center px-0 bg-transparent">
                            <a href="#" class="text-decoration-none h6 m-0">Medway Private Hire</a>
                            <span class="badge badge-primary badge-pill">Full Prep</span>
                        </li>
                        <li
                            class="list-group-item d-flex justify-content-between align-items-center px-0 bg-transparent">
                            <a href="#" class="text-decoration-none h6 m-0">Thanet PH Knowledge</a>
                            <span class="badge badge-primary badge-pill">Course Info</span>
                        </li>
                        <li
                            class="list-group-item d-flex justify-content-between align-items-center px-0 bg-transparent">
                            <a href="#" class="text-decoration-none h6 m-0">Highway Code 2026</a>
                            <span class="badge badge-primary badge-pill">Required</span>
                        </li>
                    </ul>
                </div>

                <div class="mb-5">
                    <h2 class="mb-4">Latest Test Updates</h2>
                    <div class="p-3 border rounded bg-white">
                        <small class="text-primary font-weight-bold">Feb 2026</small>
                        <h6>New Safeguarding Questions Added</h6>
                        <p class="small m-0">Mandatory for all Medway renewal and new applications.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}