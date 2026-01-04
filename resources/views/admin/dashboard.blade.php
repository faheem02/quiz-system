@extends('layouts.admin')

@section('sidebar')
<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-tachometer-alt me-2"></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.quizzes.index') }}">
            <i class="fas fa-list me-2"></i> Quizzes
        </a>
    </li>
</ul>
@endsection

@section('content')
<h3>Admin Dashboard</h3>
<hr>

<div class="row">

    <!-- Total Quizzes Card -->
    <div class="col-md-3">
        <div class="card text-bg-primary mb-3 shadow-sm">
            <div class="card-body">
                <h5>Total Quizzes</h5>
                <h3>{{ $quizCount }}</h3>
            </div>
        </div>
    </div>

    <!-- Total Questions Card -->
    <div class="col-md-3">
        <div class="card text-bg-success mb-3 shadow-sm">
            <div class="card-body">
                <h5>Total Questions</h5>
                <h3>{{ $questionCount }}</h3>
            </div>
        </div>
    </div>

    <!-- Total Users Card -->
    <div class="col-md-3">
        <div class="card text-bg-dark mb-3 shadow-sm">
            <div class="card-body">
                <h5>Total Users</h5>
                <h3>{{ $userCount }}</h3>
            </div>
        </div>
    </div>

</div>

@endsection
