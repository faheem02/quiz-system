<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Show the login form.
     */
    public function showLoginForm(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate form
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt login
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            // Role-based redirect
            if (auth()->user()->role === 'admin') {
                return redirect()->intended('/admin/dashboard');
            } else {
                return redirect()->intended('/dashboard');
            }
        }

        // Login failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Destroy an authenticated session (Logout).
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}



// public function create(): View
// {
//     return view('auth.login');
// }

// /**
//  * Handle an incoming authentication request.
//  */
// public function store(LoginRequest $request): RedirectResponse
// {
//     $request->authenticate();

//     $request->session()->regenerate();

//     return redirect()->intended(route('dashboard', absolute: false));
// }

// /**
//  * Destroy an authenticated session.
//  */
// public function destroy(Request $request): RedirectResponse
// {
//     Auth::guard('web')->logout();

//     $request->session()->invalidate();

//     $request->session()->regenerateToken();

//     return redirect('/');
// }


