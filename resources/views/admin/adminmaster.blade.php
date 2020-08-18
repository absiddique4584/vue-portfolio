<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portfolio</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <link href="{{asset('assets/admin/image/index.png')}}" rel="icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .dashboard{
            color: #ffffff;
        }
        .router-link-exact-active{
            background-color: #aee3ec;
            color: #0b2e13!important;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper" id="app">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">


            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>


        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="brand-link">
                <img src="{{asset('assets/admin/image/index.png')}}"
                     alt="AdminLTE Logo"
                     class="brand-image img-circle elevation-3"
                     style="opacity: .8">
                <span class="brand-text font-weight-light">{{auth()->user()->name}}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


                        <li class="nav-item has-treeview">
                            <router-link to="/home" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p class="dashboard">
                                    <strong >DASHBOARD</strong>
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </router-link>

                        </li>
                        <li class="nav-item">
                            <router-link to="/hero" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p class="dashboard">
                                    Hero
                                </p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/facts" class="nav-link">
                                <i class="nav-icon far fa-address-card"></i>
                                <p class="dashboard">
                                    Facts
                                </p>
                            </router-link>
                        </li>

                        <li class="nav-item">
                            <router-link to="/skills" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="dashboard">
                                    Skills
                                </p>
                            </router-link>
                        </li>

                        <li class="nav-item">
                            <router-link to="/Services" class="nav-link">
                                <i class="fab fa-servicestack"></i>
                                <p class="dashboard">
                                    Services
                                </p>
                            </router-link>
                        </li>

                        <li class="nav-item">
                            <router-link to="/testimonials" class="nav-link">
                                <i class="far fa-comment"></i>
                                <p class="dashboard">
                                    Testimonial
                                </p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/post-list" class="nav-link">
                                <i class="nav-icon fas fa-arrow-right"></i>
                                <a class="dashboard" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                    <span class="right badge badge-danger"><i class="fas fa-sign-out-alt"></i></span>
                            </router-link>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <br>
            <admin-view></admin-view>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2020 <a href="#">Deck-Soft It</a>.</strong>
            mdsumon7914@gmail.com
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.5
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">

        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>

