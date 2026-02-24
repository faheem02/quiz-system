@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    Change Password
                </div>

                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <!-- Old Password -->
                        <div class="form-group mb-3">
                            <label>Old Password</label>
                            <input type="password" name="current_password" class="form-control" required>
                            @error('current_password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- New Password -->
                        <div class="form-group mb-3">
                            <label>New Password</label>
                            <input type="password" name="password" class="form-control" required>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group mb-4">
                            <label>Confirm New Password</label>
                            <input type="password" name="password_confirmation" class="form-control" required>
                        </div>

                        <button class="btn btn-primary w-100">Update Password</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
