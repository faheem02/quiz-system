<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;

class CourseController extends Controller
{
    // ✅ FOR /courses
    public function index()
    {
        $courses = Course::latest()->get();
        return view('frontend.courses', compact('courses'));
    }

    // ✅ FOR /courses/{course}
    public function show(Course $course)
    {
        return view('frontend.course-detail', compact('course'));
    }
}

