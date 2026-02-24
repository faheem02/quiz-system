@extends('frontend.layouts.app')

@section('title', 'Taxi Licensing Knowledge Courses')

@section('content')

<div style="margin-top: 100px;"></div>

<div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
    <div class="container text-center py-5">

        <h1 class="text-white display-1">Our Courses</h1>
        <p class="text-white mb-4">Specialized training for Medway & Thanet Private Hire and Hackney Carriage drivers.
        </p>

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
                    <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filter by Council
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Medway Council</a>
                        <a class="dropdown-item" href="#">Thanet Council</a>
                        <a class="dropdown-item" href="#">Highway Code (All)</a>
                    </div>
                </div>

                <input type="text" class="form-control border-light" style="padding: 30px 25px;"
                    placeholder="Search for mock tests (e.g. SERU, Hackney)">

                <div class="input-group-append">
                    <button class="btn btn-secondary px-4 px-lg-5">Find Course</button>
                </div>

            </div>
        </div>

    </div>
</div>
<div class="container py-5">
    <div class="section-title text-center position-relative mb-5">
        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Course Catalog</h6>
        <h1 class="display-4">Start Your Professional Driving Career</h1>
    </div>

    <div class="row">
        @forelse($courses as $course)
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('frontend/img/' . $course->image) }}" class="card-img-top" alt="{{ $course->title }}">
                        {{-- style="height: 200px; object-fit: cover;"> --}}

                    <div class="card-body bg-light text-center p-4">
                        <div class="mb-2">
                            <small class="text-primary text-uppercase font-weight-bold">
                                <i class="fa fa-map-marker-alt mr-1"></i> {{ $course->council ?? 'UK Wide' }}
                            </small>
                        </div>

                        <h5 class="mb-3">Medway & Thanet Taxi Knowledge Test</h5>

                        <p class="text-muted small mb-3">
                            Professional prep covering local byelaws, safeguarding, and the 2026 Highway Code requirements.
                        </p>

                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="m-0">
                                    <i class="fa fa-star text-warning mr-2"></i>{{ $course->rating ?? '5.0' }}
                                    <small class="text-muted">({{ $course->reviews_count ?? '150+' }} Reviews)</small>
                                </h6>
                                <h5 class="m-0 text-secondary font-weight-bold">£{{ number_format($course->price, 2) }}</h5>
                            </div>
                        </div>

                        <a href="{{ route('pages.detail', $course->id) }}" class="btn btn-primary btn-block mt-4 py-2">
                            View Exam Details
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('frontend/img/' . $course->image) }}" class="card-img-top" alt="{{ $course->title }}">
                        {{-- style="height: 200px; object-fit: cover;"> --}}

                    <div class="card-body bg-light text-center p-4">
                        <div class="mb-2">
                            <small class="text-primary text-uppercase font-weight-bold">
                                <i class="fa fa-map-marker-alt mr-1"></i> {{ $course->council ?? 'UK Wide' }}
                            </small>
                        </div>

                        <h5 class="mb-3">Medway & Thanet Taxi Knowledge Test</h5>

                        <p class="text-muted small mb-3">
                            Professional prep covering local byelaws, safeguarding, and the 2026 Highway Code requirements.
                        </p>

                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="m-0">
                                    <i class="fa fa-star text-warning mr-2"></i>{{ $course->rating ?? '5.0' }}
                                    <small class="text-muted">({{ $course->reviews_count ?? '150+' }} Reviews)</small>
                                </h6>
                                <h5 class="m-0 text-secondary font-weight-bold">£{{ number_format($course->price, 2) }}</h5>
                            </div>
                        </div>

                        <a href="{{ route('pages.detail', $course->id) }}" class="btn btn-primary btn-block mt-4 py-2">
                            View Exam Details
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('frontend/img/' . $course->image) }}" class="card-img-top" alt="{{ $course->title }}">
                        {{-- style="height: 200px; object-fit: cover;"> --}}

                    <div class="card-body bg-light text-center p-4">
                        <div class="mb-2">
                            <small class="text-primary text-uppercase font-weight-bold">
                                <i class="fa fa-map-marker-alt mr-1"></i> {{ $course->council ?? 'UK Wide' }}
                            </small>
                        </div>

                        <h5 class="mb-3">Medway & Thanet Taxi Knowledge Test</h5>

                        <p class="text-muted small mb-3">
                            Professional prep covering local byelaws, safeguarding, and the 2026 Highway Code requirements.
                        </p>

                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="m-0">
                                    <i class="fa fa-star text-warning mr-2"></i>{{ $course->rating ?? '5.0' }}
                                    <small class="text-muted">({{ $course->reviews_count ?? '150+' }} Reviews)</small>
                                </h6>
                                <h5 class="m-0 text-secondary font-weight-bold">£{{ number_format($course->price, 2) }}</h5>
                            </div>
                        </div>

                        <a href="{{ route('pages.detail', $course->id) }}" class="btn btn-primary btn-block mt-4 py-2">
                            View Exam Details
                        </a>
                    </div>
                </div>
            </div>

        @empty
            <div class="col-12 text-center">
                <p class="lead">No courses available for this council yet. Check back soon!</p>
            </div>
        @endforelse
    </div>
</div>