@extends('frontend.layouts.app')

@section('title', $course->title . ' | Taxi Test Prep UK')

@section('content')

<div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 50px; margin-top: 100px;">
    <div class="container py-5">
        <h1 class="text-white display-4">{{ $course->title }}</h1>
        <div class="d-inline-flex text-white">
            <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <p class="m-0 text-uppercase">Course Details</p>
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="mb-5">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded w-100" src="{{ asset('frontend/img/' . $course->image) }}" alt="{{ $course->title }}">
                    <div class="position-absolute top-0 left-0 bg-primary text-white px-3 py-1 m-3 rounded">
                        {{ $course->council ?? 'Official Curriculum' }}
                    </div>
                </div>

                <h1 class="mb-3 font-weight-bold">{{ $course->title }}</h1>

                <div class="d-flex mb-4 align-items-center">
                    <div class="mr-4">
                        <i class="fa fa-user-tie text-primary mr-2"></i>
                        <span class="text-muted">Certified Instructor</span>
                    </div>
                    <div class="mr-4">
                        <i class="fa fa-star text-warning mr-2"></i>
                        <span>{{ $course->rating }} ({{ $course->reviews }} Verified Reviews)</span>
                    </div>
                </div>

                <h4 class="mb-3">About This Course</h4>
                <p class="text-justify">
                    {{ $course->description ?? "This specialized preparation module is designed for new drivers applying for their license with " . ($course->council ?? 'the local council') . ". 
                    Our mock tests are updated for 2026 standards, covering the Highway Code, licensing policy, and the essential topographical knowledge required to pass your " . ($course->type ?? 'Private Hire') . " test on the first attempt." }}
                </p>

                <h4 class="mt-5 mb-3">What You Will Learn</h4>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check text-success mr-2"></i> Official Highway Code Rules</li>
                            <li><i class="fa fa-check text-success mr-2"></i> Council Licensing & Compliance</li>
                            <li><i class="fa fa-check text-success mr-2"></i> Local Geography & Major Routes</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check text-success mr-2"></i> Customer Safety & Safeguarding</li>
                            <li><i class="fa fa-check text-success mr-2"></i> Plying for Hire vs Pre-booked Rules</li>
                            <li><i class="fa fa-check text-success mr-2"></i> Mock Exam with Instant Results</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm mb-5">
                <div class="card-header bg-secondary text-center p-4">
                    <h3 class="text-white m-0">£{{ $course->price ?? '19.99' }}</h3>
                </div>
                <div class="card-body p-4">
                    <h4 class="card-title mb-4">Course Features</h4>
                    <div class="d-flex justify-content-between mb-3">
                        <span><i class="fa fa-question-circle text-primary mr-2"></i>Total Questions</span>
                        <span class="font-weight-bold">150+</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <span><i class="fa fa-clock text-primary mr-2"></i>Access Period</span>
                        <span class="font-weight-bold">Life-time</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <span><i class="fa fa-certificate text-primary mr-2"></i>Certificate</span>
                        <span class="font-weight-bold">Practice Only</span>
                    </div>
                    
                    <a href="#" class="btn btn-primary btn-block btn-lg mt-4 shadow">
                        <i class="fa fa-shopping-cart mr-2"></i>Buy This Course
                    </a>
                    <p class="text-center small text-muted mt-3">Secure payment via Stripe/PayPal</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection