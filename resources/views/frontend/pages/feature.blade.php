@extends('frontend.layouts.app')

@section('title', 'Our Features')

@section('content')

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
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Why Choose Us?</h6>
                    <h1 class="display-4">Master Your Taxi Knowledge Test with Confidence</h1>
                </div>
                <p class="mb-4 pb-2">Passing the Medway or Thanet council knowledge test is the most critical step in getting your taxi badge. We provide the most up-to-date mock exams and study materials to help you succeed on your first attempt, saving you time and re-test fees.</p>

                @php
                    $features = [
                        [
                            'icon' => 'fa-car', 
                            'title' => 'Council Specific content', 
                            'desc' => 'Our tests are tailored specifically for Medway and Thanet licensing policies, byelaws, and local landmark requirements.'
                        ],
                        [
                            'icon' => 'fa-traffic-light', 
                            'title' => 'Highway Code Mastery', 
                            'desc' => 'Comprehensive practice questions covering the latest UK Highway Code standards essential for professional drivers.'
                        ],
                        [
                            'icon' => 'fa-user-shield', 
                            'title' => 'Safeguarding Training', 
                            'desc' => 'Fully updated modules on safeguarding children and vulnerable adults, a mandatory requirement for all new UK taxi applicants.'
                        ],
                        [
                            'icon' => 'fa-history', 
                            'title' => 'Unlimited Mock Exams', 
                            'desc' => 'Practice as many times as you need. Our system simulates the real exam environment to build your speed and accuracy.'
                        ],
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
                    <img class="position-absolute w-100 h-100" src="{{ asset('img/feature.jpg') }}" style="object-fit: cover;" alt="Taxi Test Training">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection