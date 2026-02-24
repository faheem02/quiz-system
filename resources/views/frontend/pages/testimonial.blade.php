@extends('frontend.layouts.app')

@section('title', 'Testimonials')

@section('content')

<div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-1">Testimonials</h1>
        <div class="d-inline-flex text-white mb-5">
            <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <p class="m-0 text-uppercase">Testimonials</p>
        </div>
    </div>
</div>
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Success Stories</h6>
                    <h1 class="display-4">What Our Drivers Say</h1>
                </div>
                <p class="m-0">Real feedback from drivers who successfully secured their Medway and Thanet council badges. Our mock tests are designed to build confidence and ensure you are fully prepared for the official assessment.</p>
            </div>

            <div class="col-lg-7">
                <div class="owl-carousel testimonial-carousel">
                    @php
                        $testimonials = [
                            [
                                'img' => 'testimonial-1.jpg', 
                                'name' => 'David R.', 
                                'course' => 'Medway Hackney Prep', 
                                'text' => 'The Medway knowledge test is notoriously difficult, but these mock exams were a lifesaver. The questions about local byelaws were exactly like the ones in the real exam. Highly recommended for any new applicant!'
                            ],
                            [
                                'img' => 'testimonial-2.jpg', 
                                'name' => 'Ahmed K.', 
                                'course' => 'Thanet Private Hire', 
                                'text' => 'I was struggling with the Highway Code and the specific Thanet routing questions. After practicing here for a week, I passed my council test on the first try. The explanations for the answers are very helpful.'
                            ],
                            [
                                'img' => 'testimonial-1.jpg', 
                                'name' => 'James L.', 
                                'course' => 'Highway Code Mastery', 
                                'text' => 'Clear, concise, and professional. This platform helped me understand the safeguarding protocols which I was very worried about. Great value for money and very easy to use on mobile.'
                            ],
                        ];
                    @endphp

                    @foreach($testimonials as $t)
                    <div class="bg-light p-5">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <p>{{ $t['text'] }}</p>
                        <div class="d-flex flex-shrink-0 align-items-center mt-4">
                            <img class="img-fluid mr-4 rounded-circle" src="{{ asset('img/'.$t['img']) }}" alt="Driver" style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <h5>{{ $t['name'] }}</h5>
                                <span class="text-primary font-weight-bold">{{ $t['course'] }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection