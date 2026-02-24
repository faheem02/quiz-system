<!-- 

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('frontend.courses.index', compact('courses'));
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);

        $hasPaid = false;
        if (Auth::check()) {
            $hasPaid = Payment::where('user_id', auth()->id())
                ->where('course_id', $id)
                ->where('status', 'completed')
                ->exists();
        }

        return view('frontend.pages.detail', compact('course', 'hasPaid'));
    }
} -->

<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of all taxi courses.
     */
    public function index()
    {
        $courses = Course::all();
        return view('frontend.courses.index', compact('courses'));
    }

    /**
     * Display the detail page for a specific taxi test.
     */
    public function show($id)
    {
        // 1. Fetch the main course the user clicked on
        $course = Course::findOrFail($id);

        // 2. Check if the user is logged in and has already paid for this course
        $hasPaid = false;
        if (Auth::check()) {
            $hasPaid = Payment::where('user_id', Auth::id())
                ->where('course_id', $id)
                ->where('status', 'completed')
                ->exists();
        }

        // 3. Fetch Related Courses (Medway/Thanet specific logic)
        // This variable MUST be here to fix your "Undefined variable" error.
        $relatedCourses = Course::where('id', '!=', $id)
            ->where('council', $course->council) // Matches council (Medway/Thanet)
            ->take(3)
            ->get();

        // 4. Fallback: If no courses found in the same council, just show 3 random others
        if ($relatedCourses->isEmpty()) {
            $relatedCourses = Course::where('id', '!=', $id)
                ->take(3)
                ->get();
        }

        // 5. Return the view with all three required variables
        return view('frontend.pages.detail', compact('course', 'hasPaid', 'relatedCourses'));
    }
}