<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FontAwesome -->
    <link href={{ asset('theme/vendor/fontawesome-free/css/all.min.css') }} rel="stylesheet">

    <!-- Theme CSS -->
    <link href={{ asset('theme/css/sb-admin-2.min.css') }} rel="stylesheet">
</head>

<body>

<!-- TOP NAVBAR -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">Quiz System</span>

        <div class="d-flex align-items-center">
            <span class="text-white me-3">
                {{ auth()->user()->name ?? '' }}
            </span>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-outline-light btn-sm">Logout</button>
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-md-2 bg-light vh-100 p-3">
            @yield('sidebar')
        </div>

        <!-- MAIN CONTENT -->
        <div class="col-md-10 p-4">
            @yield('content')
        </div>

    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
<script src={{ asset('theme/vendor/jquery/jquery.min.js') }}></script>

<!-- Bootstrap Bundle -->
<script src={{ asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>

<!-- Theme JS -->
<script src={{ asset('theme/js/sb-admin-2.min.js') }}></script>


</body>
</html>
