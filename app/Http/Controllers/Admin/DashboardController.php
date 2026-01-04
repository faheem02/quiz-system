<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'quizCount' => Quiz::count(),
            'questionCount' => Question::count(),
            'userCount' => User::count(),
        ]);
    }
}
