@extends('layouts.user')

@section('content')
<div class="container">
    <h3>{{ $quiz->title }}</h3>

    <form method="POST"
          action="{{ route('user.quiz.submit', $quiz->id) }}">
        @csrf

        @foreach($quiz->questions as $q)
            <div class="card mb-3">
                <div class="card-body">
                    <strong>{{ $q->question }}</strong>

                    @foreach($q->options as $opt)
                        <div class="form-check">
                            <input class="form-check-input"
                                   type="radio"
                                   name="question_{{ $q->id }}"
                                   value="{{ $opt->id }}"
                                   required>

                            <label class="form-check-label">
                                {{ $opt->option_text }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

        <button class="btn btn-primary">Submit Quiz</button>
    </form>
</div>
@endsection
