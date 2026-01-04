@extends('layouts.user')

@section('content')
<div class="container text-center">
    <h3>Quiz Result</h3>

    <h4>{{ $quiz->title }}</h4>

    <p>
        Score: <strong>{{ $score }}</strong>
        /
        <strong>{{ $total }}</strong>
    </p>

    <a href="{{ route('user.quizzes') }}"
       class="btn btn-secondary">
       Back to Quizzes
    </a>
</div>
@endsection
