@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>All Quizzes</h2>
        <a href="{{ route('admin.quizzes.create') }}" class="btn btn-primary mb-3">Add Quiz</a>

        <table class="table table-bordered">
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            @foreach($quizzes as $quiz)
                <tr>
                    <td>{{ $quiz->title }}</td>
                    <td>{{ $quiz->is_active ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('admin.questions.index', $quiz->id) }}" class="btn btn-sm btn-info">
                            Questions
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection