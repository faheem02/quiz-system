<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Quiz System</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            height: 100vh;
        }

        .card-register {
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            padding: 2rem;
        }

        .btn-primary {
            background: #6e8efb;
            border: none;
        }

        .btn-primary:hover {
            background: #5a76e3;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #6e8efb;
        }

        .logo {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh; padding-top: 50px; padding-bottom: 50px;">

    <div class="card card-register col-md-6 col-lg-4 p-4">
        <div class="text-center">
            <img src="https://cdn-icons-png.flaticon.com/512/2942/2942688.png" class="logo" alt="Quiz Logo">
            <h2 class="mb-3">Create Account</h2>
            <p class="text-muted mb-4">Sign up to start using Quiz System</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                       name="name" value="{{ old('name') }}" required autofocus placeholder="Enter your name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                       name="email" value="{{ old('email') }}" required placeholder="Enter your email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" 
                       name="password" required placeholder="Enter your password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" required placeholder="Confirm your password">
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
            </div>
        </form>

        <div class="text-center mt-3">
            <small class="text-light">Already have an account? <a href="{{ route('login') }}" class="text-white">Login</a></small>
        </div>
    </div>
</div>

</body>
</html>
