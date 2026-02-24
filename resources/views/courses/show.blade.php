<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $course->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h3>{{ $course->name }}</h3>
                    </div>
                    <div class="card-body">
                        <p>{{ $course->description }}</p>
                        
                        <div class="row mb-4">
                            <div class="col-md-4 text-center">
                                <h5>📝 Questions</h5>
                                <p>{{ $course->total_questions }}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <h5>⏱️ Duration</h5>
                                <p>{{ $course->duration_minutes }} mins</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <h5>💰 Price</h5>
                                <p>${{ number_format($course->price, 2) }}</p>
                            </div>
                        </div>

                        @if($hasPaid)
                            {{-- User already paid - show start quiz button --}}
                            <div class="alert alert-success text-center">
                                ✅ You have already paid for this course!
                            </div>
                            <a href="{{ route('quiz.start', $course->id) }}" 
                               class="btn btn-success w-100 btn-lg">
                                Start Quiz Now! 🚀
                            </a>
                        @else
                            {{-- User hasn't paid - show payment button --}}
                            <div class="alert alert-info text-center">
                                💳 Payment required to take this quiz
                            </div>
                            <form action="{{ route('paypal.pay') }}" method="POST">
                                @csrf
                                <input type="hidden" name="course_id" value="{{ $course->id }}">
                                <button type="submit" class="btn btn-primary w-100 btn-lg">
                                    Pay ${{ number_format($course->price, 2) }} & Take Quiz 🎯
                                </button>
                            </form>
                        @endif
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('courses.index') }}" class="btn btn-secondary">
                            ← Back to Courses
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>