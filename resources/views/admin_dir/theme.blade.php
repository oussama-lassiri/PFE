<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="{{asset('\img\logo.png')}}" sizes="16x16 32x32">
<link rel="stylesheet" href="{{asset('assets/css/morris.css')}}">
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
<title>@yield('title admin')</title>
@yield('style admin')
<!-- jQuery  -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/assets/js/metismenu.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/js/waves.min.js') }}"></script>
<!--Morris Chart-->
<script src="{{ asset('assets/js/morris.min.js') }}"></script>
<script src="{{ asset('assets/js/raphael.min.js') }}"></script>
<script src="{{ asset('assets/js/dashboard.init.js') }}"></script>
<!-- App js -->
<script src="{{ asset('assets/js/app.js') }}"></script>


<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="#" class="logo">
                    <span class="logo-light ">
                            <img
                                src="\img\logo.png"
                                height="45"
                                alt="Particulier Logo"
                                loading="lazy"
                            /> Particulier
                        </span>
            </a>
        </div>

        <!--burger menu-->
        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>
        </ul>

        <nav class="navbar-custom">
            <ul class="navbar-right list-inline float-right mb-0">

                <!-- full screen -->
                <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                    <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                        <i class="mdi mdi-arrow-expand-all noti-icon"></i>
                    </a>
                </li>

                <li class="dropdown notification-list list-inline-item">
                    <div class="dropdown notification-list nav-pro-img">
                        <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('https://bootdey.com/img/Content/avatar/avatar7.png')}}" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <a class="dropdown-item" href="{{ route('user_space', ['id' => Auth::user()->id]) }}"><i class="mdi mdi-account-circle"></i> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                                   document.getElementById('logout-form').submit();"
                            ><i class="mdi mdi-power text-danger"></i>
                                {{ __('Quitter') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </li>

            </ul>



        </nav>

    </div>
    <!-- Top Bar End -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                    <li class="menu-title">Menu</li>
                    <li>
                        <a href="{{ route('admin') }}" class="waves-effect">
                            <i class="icon-accelerator"></i>
                            <span class="badge badge-success badge-pill float-right">9+</span>
                            <span> Dashboard </span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect">
                            <i class="icon-profile"></i>
                            <span> Utilisateurs
                                <span class="float-right menu-arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{ route('admin_user') }}">Liste des utilisateurs</a></li>
                            <ul class="submenu">
                                <li><a href="{{ route('admin_ajout_user') }}"> Ajout d'utilisateur</a></li><!--route('admin_ajout_user')-->
                                <li><a href="{{ route('admin_user.gestion') }}">Gestion des comptes </a></li>
                            </ul>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect">
                            <i class="icon-paper-sheet"></i>
                            <span> Annonces  <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('first_page.index') }}"> Ajout d'annonce</a></li>
                                <li><a href="{{ route('admin_annonce') }}">Gestion d'annonces</a></li>
                            </ul>
                    </li>

                    <li>
                        <a href="{{route('admin_comment')}}" class="waves-effect">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-text" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                            <span> Commentaire </span>
                        </a>
                    </li>
<!--
                    <li>
                        <a href="{{ route('admin_statistique') }}" class="waves-effect">
                            <i class="icon-graph"></i>
                            <span> Statistiques</span>
                        </a>

                    </li>
-->

                    <!--
                                        <li>
                                            <a href="javascript:void(0);" class="waves-effect">
                                                <i class="icon-share"></i>
                                                <span> Multi Level <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                            <ul class="submenu">
                                                <li><a href="#"> Menu 1</a></li>
                                                <li>
                                                    <a href="#">Menu 2  <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                                    <ul class="submenu">
                                                        <li><a href="#">Menu 2.1</a></li>
                                                        <li><a href="#">Menu 2.1</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                    -->
                </ul>

            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>

        <!-- Sidebar -left -->
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Admin</a></li>
                                <li class="breadcrumb-item active">@yield('page')</li>
                            </ol>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end page-title -->

                @yield('right content')

            </div>
            <!-- container-fluid -->

        </div>
        <!-- content -->

        <footer class="footer">
            ©2022 Particulier A Particulier
            <span class="d-none d-sm-inline-block"> - <img
                    src="\img\logo.png"
                    height="45"
                    alt="Particulier Logo"
                    loading="lazy"
                />  </span>
        </footer>

    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->
@yield('JS')
</body>
</html>
