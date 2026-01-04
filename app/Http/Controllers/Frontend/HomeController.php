<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;

class HomeController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->take(6)->get();
        return view('frontend.home', compact('courses'));
    }
}
