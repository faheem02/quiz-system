<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Edukate')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="{{ asset('frontend/img/favicon.ico') }}" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries CSS -->
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

<style>
/* Navbar button hover effects */
.btn-navbar {
    transition: all 0.3s ease;
    border-radius: 50px; /* rounded pill shape */
    padding: 8px 20px;
}

.btn-navbar:hover {
    transform: translateY(-3px); /* slight lift */
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    opacity: 0.9;
}

/* Optional: different hover for outline button */
.btn-outline-primary.btn-navbar:hover {
    background-color: #007bff; /* fill color */
    color: #fff; /* text color */
    border-color: #007bff;
}
</style>


</head>

<body>

    @include('frontend.partials.topbar')
    @include('frontend.partials.navbar')

    @yield('content')

    @include('frontend.partials.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top">
        <i class="fa fa-angle-double-up"></i>
    </a>

    <!-- JS Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>
</html>
