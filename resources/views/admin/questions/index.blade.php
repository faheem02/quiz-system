@extends('layouts.admin')

@section('content')
<div class="container">
    <h3>{{ $quiz->title }} – Questions</h3>

    <a href="{{ route('admin.questions.create', $quiz->id) }}"
       class="btn btn-primary mb-3">
       Add Question
    </a>

    @foreach($quiz->questions as $q)
        <div class="card mb-3">
            <div class="card-body">
                <strong>{{ $q->question }}</strong>
                <ul>
                    @foreach($q->options as $opt)
                        <li>
                            {{ $opt->option_text }}
                            @if($opt->is_correct)
                                <span class="badge bg-success">Correct</span>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach
</div>
@endsection

