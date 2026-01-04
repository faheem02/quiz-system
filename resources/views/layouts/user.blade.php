<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<style>
        .nav-link {
            color: #333;
            border-radius: 6px;
            padding: 10px;
        }

        .nav-link:hover {
            background: #0d6efd;
            color: #fff;
        }
    </style>


</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <span class="navbar-brand">🎓 Quiz System</span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-light btn-sm">Logout</button>
        </form>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-md-2 bg-white shadow vh-100 p-0">

    <div class="text-center py-4 border-bottom">
        <i class="fas fa-user-circle fa-3x text-primary"></i>
        <h6 class="mt-2 mb-0">User Panel</h6>
    </div>

    <ul class="nav flex-column p-3 gap-2">
        <li class="nav-item">
            <a class="nav-link rounded {{ request()->routeIs('user.dashboard') ? 'bg-primary text-white' : '' }}"
               href="{{ route('user.dashboard') }}">
                <i class="fas fa-home me-2"></i> Dashboard
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link rounded {{ request()->routeIs('user.quizzes*') ? 'bg-primary text-white' : '' }}"
               href="{{ route('user.quizzes') }}">
                <i class="fas fa-list me-2"></i> Quizzes
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link rounded {{ request()->routeIs('user.quiz.history') ? 'bg-primary text-white' : '' }}"
               href="{{ route('user.quiz.history') }}">
                <i class="fas fa-history me-2"></i> History
            </a>
        </li>
    </ul>

</div>


        <!-- MAIN CONTENT -->
        <div class="col-md-10 p-4">
            @yield('content')
        </div>

    </div>
</div>

</body>
</html>
