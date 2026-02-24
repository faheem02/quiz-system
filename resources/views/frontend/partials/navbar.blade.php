
<!-- Navbar Start -->
<div class="container-fluid p-0 fixed-top" style="top: 40px; z-index: 1020;">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3 py-lg-0 px-lg-5">
       <a href="{{ route('home') }}" class="navbar-brand ml-lg-3">
            <h1 class="m-0 text-uppercase text-primary">
                <i class="fa fa-taxi mr-3"></i>Taxi Prep
            </h1>
        </a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                <a href="{{ route('courses.index') }}" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
    <a href="{{ route('pages.detail') }}" class="dropdown-item">Course Detail</a>
    <a href="{{ route('pages.feature') }}" class="dropdown-item">Our Features</a>
    <a href="{{ route('pages.team') }}" class="dropdown-item">Instructors</a>
    <a href="{{ route('pages.testimonial') }}" class="dropdown-item">Testimonial</a>
</div>

                </div>
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            </div>

           <div class="d-flex">

    @guest
        <a href="{{ route('register') }}" class="btn btn-primary py-2 px-4 mr-2 d-none d-lg-block">
            Sign Up
        </a>
        <a href="{{ route('login') }}" class="btn btn-outline-primary py-2 px-4 d-none d-lg-block">
            Login
        </a>
    @endguest

    @auth 
         <a href="{{ route('dashboard') }}" class="btn btn-primary py-2 px-4 mr-2 d-none d-lg-block">
            Dashboard
        </a>
        <a href="{{ route('password.edit') }}" class="btn btn-outline-primary py-2 px-4 d-none d-lg-block">
                    Change Password
                </a> 
    @endauth

</div>

        </div>
        
    </nav>
</div>
<!-- Navbar End -->

<!-- Add spacing so page content is not hidden behind fixed top -->
<div style="margin-top: 100px;"></div>




{{-- <div class="container-fluid p-0 fixed-top" style="top: 40px; z-index: 1020;">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3 py-lg-0 px-lg-5">
        <a href="{{ route('home') }}" class="navbar-brand ml-lg-3">
            <h1 class="m-0 text-uppercase text-primary">
                <i class="fa fa-taxi mr-3"></i>Taxi Prep
            </h1>
        </a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                
                <a href="{{ route('courses.index') }}" class="nav-item nav-link">Practice Exams</a>
                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Resources</a>
                    <div class="dropdown-menu m-0 border-0 shadow-sm">
                        <a href="{{ route('pages.feature') }}" class="dropdown-item">Why Prep With Us?</a>
                        <a href="{{ route('pages.team') }}" class="dropdown-item">Our Panel</a>
                        <a href="{{ route('pages.testimonial') }}" class="dropdown-item">Driver Reviews</a>
                    </div>
                </div>
                
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            </div>

            <div class="d-flex align-items-center">

                @guest
                    <a href="{{ route('login') }}" class="btn btn-outline-primary py-2 px-4 mr-2 d-none d-lg-block">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-primary py-2 px-4 d-none d-lg-block">
                        Get Started
                    </a>
                @endguest

                 @auth 
                    <a href="{{ route('dashboard') }}" class="btn btn-primary py-2 px-4 mr-2 d-none d-lg-block">
                        <i class="fa fa-user-circle mr-1"></i> Dashboard
                    </a>
                    

                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger py-2 px-4 d-none d-lg-block">
                            Logout
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>
</div>
<div style="margin-top: 110px;"></div> --}}