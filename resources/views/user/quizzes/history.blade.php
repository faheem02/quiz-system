@extends('layouts.user')

@section('content')

<h4 class="mb-4">🕒 Quiz History</h4>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Quiz</th>
                    <th>Score</th>
                    <th>Date</th>
                </tr>
            </thead>

            <tbody>
                @forelse($results as $result)
                <tr>
                    <td>{{ $result->quiz->title ?? 'Deleted' }}</td>
                    <td>
                        <span class="badge bg-success">
                            {{ $result->score }}/{{ $result->total_questions }}
                        </span>
                    </td>
                    <td>{{ $result->created_at->format('d M Y') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center text-muted">
                        No attempts yet
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>

@endsection
