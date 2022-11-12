<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <title>Admin - @yield('title')</title>
</head>
<body>
    {{-- navbar --}}
    <header class="navbar bg-light flex-md-nowrap">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/"><h1>Eventry</h1></a>
        <button class="navbar-toggler d-md-none me-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarmenu" aria-controls="sidebarmenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>

    {{-- content --}}
    <div class="container-fluid">
        <div class="row" style="min-height: 100vh">
            {{-- nav/sidebar --}}
            <nav id="sidebarmenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav nav-pills nav-fill flex-column align-items-start">
                        @section('sidebar-item')
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">
                                <i class="bi bi-speedometer"></i>  Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/events">
                               <i class="bi bi-calendar-event"></i>  Events
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/categories">
                               <i class="bi bi-tags"></i>  Categories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/bookings">
                               <i class="bi bi-ticket-perforated"></i>  Bookings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="/admin/users">
                               <i class="bi bi-people"></i>  Users
                            </a>
                        </li>
                        <hr>
                        <hr>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#">
                               <i class="bi bi-person-circle"></i>  Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#">
                               <i class="bi bi-escape"></i>  Log Out
                            </a>
                        </li>
                        @show
                    </ul>
                </div>
            </nav>
            {{-- end nav/sidebar --}}

            <div class="col-md-9 col-lg-10">
                @yield('content')
            </div>
        </div>
    </div>



    @include('partials.footer')
    @include('partials.footer-script')
</body>
</html>