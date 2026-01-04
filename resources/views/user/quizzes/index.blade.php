@extends('layouts.user')

@section('content')

<h4 class="mb-4">📚 Available Quizzes</h4>

<div class="row">

@forelse($quizzes as $quiz)
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body">
                <h5 class="card-title">{{ $quiz->title }}</h5>

                <p class="text-muted small">
                    Total Questions: {{ $quiz->questions_count ?? 'N/A' }}
                </p>

                <a href="{{ route('user.quiz.attempt', $quiz->id) }}"
                   class="btn btn-primary btn-sm w-100">
                    <i class="fas fa-play"></i> Start Quiz
                </a>
            </div>
        </div>
    </div>
@empty
    <p class="text-muted">No quizzes available.</p>
@endforelse

</div>

@endsection
