@extends('frontend.layouts.app')

@section('title', $course->title)

@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <img class="img-fluid mb-4"
                 src="{{ asset('frontend/img/' . $course->image) }}">

            <h1 class="mb-3">{{ $course->title }}</h1>

            <p class="text-muted">
                Instructor: {{ $course->instructor }}
            </p>

            <p>
                ⭐ {{ $course->rating }}
                ({{ $course->reviews }} reviews)
            </p>

            <p>
                This is course description.
                Later we will make it dynamic.
            </p>
        </div>

        <div class="col-lg-4">
            <div class="bg-light p-4">
                <h4>Course Info</h4>
                <p><strong>Instructor:</strong> {{ $course->instructor }}</p>
                <p><strong>Rating:</strong> {{ $course->rating }}</p>
                <p><strong>Reviews:</strong> {{ $course->reviews }}</p>

                <a href="#" class="btn btn-primary btn-block">
                    Enroll Now
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
