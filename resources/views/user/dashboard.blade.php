@extends('layouts.user')

@section('content')

<h4 class="mb-4">👋 Welcome to Your Dashboard</h4>

<!-- SUMMARY CARDS -->
<div class="row mb-4">

    <div class="col-md-4">
        <div class="card shadow-sm border-0">
            <div class="card-body text-center">
                <i class="fas fa-book fa-2x text-primary mb-2"></i>
                <h5>{{ $quizzes->count() }}</h5>
                <p class="text-muted mb-0">Available Quizzes</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm border-0">
            <div class="card-body text-center">
                <i class="fas fa-check-circle fa-2x text-success mb-2"></i>
                <h5>{{ $results->count() }}</h5>
                <p class="text-muted mb-0">Attempted Quizzes</p>
            </div>
        </div>
    </div>

</div>

<!-- AVAILABLE QUIZZES -->
<div class="card shadow-sm border-0 mb-4">
    <div class="card-header bg-white fw-bold">
        📚 Available Quizzes
    </div>
    <div class="card-body">

        @if($quizzes->count() > 0)
            <div class="list-group list-group-flush">
                @foreach($quizzes as $quiz)
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <strong>{{ $quiz->title }}</strong>
                            @if(!$quiz->is_active)
                                <span class="badge bg-secondary ms-2">Inactive</span>
                            @endif
                        </div>
                        <a href="{{ route('user.quiz.attempt', $quiz->id) }}"
                           class="btn btn-sm btn-primary">
                            <i class="fas fa-play"></i> Attempt
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-muted mb-0">No quizzes available at the moment.</p>
        @endif

    </div>
</div>

<!-- QUIZ HISTORY -->
<div class="card shadow-sm border-0">
    <div class="card-header bg-white fw-bold">
        🕒 My Quiz History
    </div>
    <div class="card-body">

        @if($results->count() > 0)
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Quiz</th>
                        <th>Score</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($results as $result)
                        <tr>
                            <td>{{ $result->quiz->title ?? 'Deleted Quiz' }}</td>
                            <td>
                                <span class="badge bg-success">
                                    {{ $result->score }} / {{ $result->total_questions }}
                                </span>
                            </td>
                            <td>{{ $result->created_at->format('d M Y, H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-muted mb-0">No quiz attempts yet.</p>
        @endif

    </div>
</div>

@endsection
