@extends('frontend.layouts.app')

@section('title', 'Our Features')

@section('content')

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-1">Our Features</h1>
        <div class="d-inline-flex text-white mb-5">
            <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <p class="m-0 text-uppercase">Our Features</p>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Feature Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Why Choose Us?</h6>
                    <h1 class="display-4">Why You Should Start Learning with Us?</h1>
                </div>
                <p class="mb-4 pb-2">Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet.</p>

                @php
                    $features = [
                        ['icon' => 'fa-graduation-cap', 'title' => 'Skilled Instructors', 'desc' => 'Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.'],
                        ['icon' => 'fa-certificate', 'title' => 'International Certificate', 'desc' => 'Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.'],
                        ['icon' => 'fa-book-reader', 'title' => 'Online Classes', 'desc' => 'Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.'],
                    ];
                @endphp

                @foreach($features as $feature)
                <div class="d-flex mb-3">
                    <div class="btn-icon {{ $loop->last ? 'bg-warning' : ($loop->first ? 'bg-primary' : 'bg-secondary') }} mr-4">
                        <i class="fa fa-2x {{ $feature['icon'] }} text-white"></i>
                    </div>
                    <div class="mt-n1">
                        <h4>{{ $feature['title'] }}</h4>
                        <p class="m-0">{{ $feature['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{ asset('img/feature.jpg') }}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

@endsection
