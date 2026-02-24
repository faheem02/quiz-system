<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\QuizController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\QuizAttemptController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PayPalController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ================= FRONTEND =================

// Home page
Route::get('/', [HomeController::class, 'index'])->name('home');

// About page
Route::view('/about', 'frontend.about')->name('about');

// Pages dropdown
Route::get('/course-detail', [CourseController::class, 'show'])->name('pages.detail');

Route::get('/instructors', function () {
    return view('frontend.pages.team');
})->name('pages.team');

Route::get('/features', function () {
    return view('frontend.pages.feature');
})->name('pages.feature');

Route::get('/testimonial', function () {
    return view('frontend.pages.testimonial');
})->name('pages.testimonial');

// Courses pages
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');

// Contact page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


// ================= AUTH =================

// Login
Route::get('/login', [AuthenticatedSessionController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

// Logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Register
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);


// ================= DASHBOARD REDIRECT =================
Route::middleware('auth')->get('/dashboard', function () {
    return auth()->user()->role === 'admin'
        ? redirect()->route('admin.dashboard')
        : redirect()->route('user.dashboard');
})->name('dashboard');


// ================= ADMIN =================
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Contact Messages
    Route::get('/messages', [\App\Http\Controllers\Admin\ContactMessageController::class, 'index'])
        ->name('admin.messages');

    // Quizzes
    Route::get('/quizzes', [QuizController::class, 'index'])->name('admin.quizzes.index');
    Route::get('/quizzes/create', [QuizController::class, 'create'])->name('admin.quizzes.create');
    Route::post('/quizzes', [QuizController::class, 'store'])->name('admin.quizzes.store');

    // Questions
    Route::get('/quizzes/{quiz}/questions', [QuestionController::class, 'index'])->name('admin.questions.index');
    Route::get('/quizzes/{quiz}/questions/create', [QuestionController::class, 'create'])->name('admin.questions.create');
    Route::post('/quizzes/{quiz}/questions', [QuestionController::class, 'store'])->name('admin.questions.store');
});


// ================= USER =================
Route::middleware('auth')->prefix('user')->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');


    // Quiz (add your quiz routes here)
Route::get('/quiz/{course_id}/start', function($course_id) {
    return "Quiz started for course: " . $course_id;
})->name('quiz.start');

    // Quizzes
    Route::get('/quizzes', [QuizAttemptController::class, 'index'])->name('user.quizzes');
    Route::get('/quizzes/history', [QuizAttemptController::class, 'history'])->name('user.quiz.history');
    Route::get('/quizzes/{quiz}', [QuizAttemptController::class, 'show'])->name('user.quiz.attempt');
    Route::post('/quizzes/{quiz}/submit', [QuizAttemptController::class, 'submit'])->name('user.quiz.submit');
});

Route::middleware('auth')->group(function () {
    Route::get('/change-password', [PasswordController::class, 'edit'])->name('password.edit');
    Route::post('/change-password', [PasswordController::class, 'update'])->name('password.update');
});


// ================= PROFILE =================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ================= Paypal =================

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

Route::post('/paypal/pay', [PayPalController::class, 'pay'])->name('paypal.pay');
Route::get('/paypal/success', [PayPalController::class, 'success'])->name('paypal.success');
Route::get('/paypal/cancel', [PayPalController::class, 'cancel'])->name('paypal.cancel');


Route::get('/order', function () {
    return view('order');
});

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

require __DIR__ . '/auth.php';
