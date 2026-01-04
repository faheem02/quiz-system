@extends('frontend.layouts.app')

@section('title', 'Courses')

@section('content')
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
