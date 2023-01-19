


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - XOVIYA</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion p-0" style="background-color: #8482FF; width: 30%" id="navbars">
            <div class="container-fluid d-flex flex-column p-0">
                    <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon"><i class="fas fa-user-circle"></i></div>
                    <div class="sidebar-brand-text mx-3"><span class="text-wrap"> Welcome {{auth()->user()->username}}</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                @if (auth()->user()->is_admin = 1)
                    <ul class="navbar-nav text-light" id="accordionSidebar">
                        <li class="nav-item"><a class="nav-link" href="{{route('home.dashboard')}}"><i class="fas fa-tachometer-alt"></i><span>Home</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('home.profile', auth()->user()->id)}}"><i class="fas fa-user"></i><span>Profile</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('home.leaderboard')}}"><i class="fas fa-table"></i><span>Leaderboard</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('home.course')}}"><i class="bi bi-book"></i><span>Course</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('home.test')}}"><i class="bi bi-pencil-square"></i></i><span>Test Question</span></a></li>
                    <ul class="navbar-nav text-light" id="accordionSidebar">
                @endif
                    {{-- <hr> --}}

                @if (auth()->user()->is_admin = 0)
                    <ul class="navbar-nav text-light" id="accordionSidebar">
                        <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-user"></i><span>Profile</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.users.index') }}"><i class="fa fa-users"></i><span>Users</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.courses.index') }}"><i class="bi bi-book"></i><span>Courses</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.message.index') }}"><i class="fa fa-comments-o"></i><span>Inbox</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('logout')}}"><i class="fa fa-sign-out"></i></i><span>Log Out</span></a></li>
                    <ul class="navbar-nav text-light" id="accordionSidebar">
                @endif

                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid" ><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-lg-inline me-2 text-gray-600 small fw-bold">{{auth()->user()->name}} {{auth()->user()->surname}}</span><img class="border rounded-circle img-profile img-fluid" src="{{asset('storage/'.auth()->user()->image)}}"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                        @if (auth()->user()->is_admin = 1)
                                        <a class="dropdown-item" href="{{route('home.profile')}}"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <a class="dropdown-item" href="{{route('home.editprofile', auth()->user()->id)}}"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <a class="dropdown-item" href="{{route('home.leaderboard')}}"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Leaderboard</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                        @endif

                                        @if (auth()->user()->is_admin = 0)
                                        <a class="dropdown-item" href="{{route('admin.users.index')}}"><i class="fas fa-users fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Users</a>
                                        <a class="dropdown-item" href="{{route('home.editprofile', auth()->user()->id)}}"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <a class="dropdown-item" href="{{route('admin.message.index')}}"><i class="fas fa fa-comments-o fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Messages</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                        @endif

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                @if(session()->has('message'))
                    <div class="alert alert-success">
                    {{ session()->get('message')}}
                    </div>
                @endif


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')


            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/chart.min.js')}}"></script>
    <script src="{{asset('assets/js/bs-init.js')}}"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>
</body>

</html>
