<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use App\Models\Result;

class UserDashboardController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::where('is_active', 1)->get();
        $results = Result::with('quiz')->where('user_id', auth()->id())->latest()->get();

        return view('user.dashboard', compact('quizzes', 'results'));
    }
}
