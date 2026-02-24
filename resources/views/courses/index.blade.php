<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz System - Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Available Courses</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="row">
            @foreach($courses as $course)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <h5 class="card-title">{{ $course->name }}</h5>
                        <p class="card-text">{{ $course->description }}</p>
                        <ul class="list-unstyled">
                            <li>📝 Questions: {{ $course->total_questions }}</li>
                            <li>⏱️ Duration: {{ $course->duration_minutes }} mins</li>
                            <li>💰 Price: ${{ number_format($course->price, 2) }}</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('courses.show', $course->id) }}" 
                           class="btn btn-primary w-100">
                            View Course
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>