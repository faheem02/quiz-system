<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        // Use pagination instead of all() to avoid timeout
        $courses = Course::paginate(6);

        return view('frontend.courses.index', compact('courses'));
    }

    public function show()
    {
        // Get first course safely
        $course = Course::first();

        if (!$course) {
            abort(404, 'No course found');
        }

        $hasPaid = false;

        if (Auth::check()) {
            $hasPaid = Payment::where('user_id', auth()->id())
                ->where('course_id', $course->id)
                ->where('status', 'completed')
                ->exists();
        }

        return view('frontend.pages.detail', compact('course', 'hasPaid'));
    }
}
