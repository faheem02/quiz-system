@extends('frontend.layouts.app')

@section('title', 'Our Licensing Experts')

@section('content')

<div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-1">Our Experts</h1>
        <div class="d-inline-flex text-white mb-5">
            <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <p class="m-0 text-uppercase">Experts</p>
        </div>
    </div>
</div>
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="section-title text-center position-relative mb-5">
            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Licensing Experts</h6>
            <h1 class="display-4">Meet Our Knowledge Panel</h1>
        </div>

        <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
            @php
                $instructors = [
                    ['img' => 'team-1.jpg', 'name' => 'Compliance Officer', 'title' => 'Council Policy Specialist'],
                    ['img' => 'team-2.jpg', 'name' => 'Road Safety Expert', 'title' => 'Highway Code Trainer'],
                    ['img' => 'team-3.jpg', 'name' => 'Local Area Guide', 'title' => 'Geography & Routes Specialist'],
                    ['img' => 'team-4.jpg', 'name' => 'Safeguarding Lead', 'title' => 'Professional Conduct Trainer'],
                ];
                $socials = ['twitter','facebook-f','linkedin-in'];
            @endphp

            @foreach($instructors as $inst)
            <div class="team-item shadow-sm">
                <img class="img-fluid w-100" src="{{ asset('img/'.$inst['img']) }}" alt="{{ $inst['name'] }}">
                <div class="bg-light text-center p-4">
                    <h5 class="mb-3">{{ $inst['name'] }}</h5>
                    <p class="mb-2 text-primary font-weight-bold">{{ $inst['title'] }}</p>
                    <div class="d-flex justify-content-center">
                        @foreach($socials as $social)
                        <a class="mx-1 p-1 text-secondary" href="#"><i class="fab fa-{{ $social }}"></i></a>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection