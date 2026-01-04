@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')

    <!-- Header -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center my-5 py-5">
            <h1 class="text-white mt-4 mb-4">Learn From Home</h1>
            <h1 class="text-white display-1 mb-5">Education Courses</h1>
        </div>
    </div>

    <!-- About -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid" src="{{ asset('frontend/img/about.jpg') }}">
                </div>
                <div class="col-lg-7">
                    <h1>First Choice For Online Education</h1>
                    <p>Your original content remains unchanged.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3">Courses</h5>
                <h1>Our Popular Courses</h1>
            </div>

            <div class="row">
                @foreach($courses as $course)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="course-item bg-light">
                            <img class="img-fluid" src="{{ asset('frontend/img/' . $course->image) }}" alt="">

                            <div class="p-4">
                                <h5 class="mb-3">{{ $course->title }}</h5>

                                <p class="mb-2">
                                    Instructor: {{ $course->instructor }}
                                </p>

                                <div class="d-flex justify-content-between">
                                    <small>
                                        ⭐ {{ $course->rating }}
                                        ({{ $course->reviews }})
                                    </small>

                                    <a href="{{ route('courses.show', $course->id) }}" class="btn btn-sm btn-primary">
                                        View Course
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection