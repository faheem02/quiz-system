<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function edit()
    {
        return view('auth.change-password');
    }

    public function update(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        // Check old password
        if (!Hash::check($request->current_password, auth()->user()->password)) {
            return back()->withErrors(['current_password' => 'Old password is incorrect']);
        }

        // Update password
        auth()->user()->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('dashboard')->with('success', 'Password changed successfully');
    }
}
