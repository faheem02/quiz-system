@extends('frontend.layouts.app')

@section('title', 'Courses')

@section('content')

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
    <div class="container text-center py-5">

        <h1 class="text-white display-1">Courses</h1>

        <div class="d-inline-flex text-white mb-5">
            <p class="m-0 text-uppercase">
                <a class="text-white" href="{{ route('home') }}">Home</a>
            </p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <p class="m-0 text-uppercase">Courses</p>
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



<div class="container py-5">
    <h1 class="mb-4">Our Courses</h1>

    <div class="row">
        @forelse($courses as $course)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('frontend/img/' . $course->image) }}" class="card-img-top">

                    <div class="card-body">
                        <h5>{{ $course->title }}</h5>
                        <p>Instructor: {{ $course->instructor }}</p>
                        <p>
                            ⭐ {{ $course->rating }}
                            ({{ $course->reviews }} reviews)
                        </p>
                    </div>
                </div>
            </div>
        @empty
            <p>No courses available.</p>
        @endforelse
    </div>
</div>
@endsection
