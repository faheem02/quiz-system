@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create Quiz</h2>

    <form method="POST" action="{{ route('admin.quizzes.store') }}">
        @csrf
        <input type="text" name="title" class="form-control mb-2" placeholder="Quiz Title">
        <textarea name="description" class="form-control mb-2" placeholder="Description"></textarea>
        <button class="btn btn-success">Save</button>
    </form>
</div>
@endsection
