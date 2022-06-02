<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('assets/css/morris.css')}}">
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
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
                            <img src="assets/images/user-4.jpg" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> Profile</a>
                            <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings"></i> Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
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
                                <li><a href="{{ route('register') }}"> Ajout d'utilisateur</a></li><!--route('admin_ajout_user')-->
                                <li><a href="{{ route('admin_user.gestion') }}">Gestion des comptes </a></li>
                            </ul>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect">
                            <i class="icon-paper-sheet"></i>
                            <span> Annonces  <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ route('admin_annonce') }}">
                                        Gestion d'annonces
                                        <span class="float-right menu-arrow">
                                            <i class="mdi mdi-chevron-right"></i>
                                        </span>
                                    </a>
                                </li>

                            </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect">
                            <i class="icon-graph"></i>
                            <span> Statistiques <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="{{ route('admin_statistique') }}">Annonces</a></li>
                            <li><a href="{{ route('admin_statistique') }}">Utilisateurs</a></li>
                        </ul>
                    </li>

                    <li><a href="#">FAQs</a></li>
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
                                <li class="breadcrumb-item"><a href="#">nomAdmin</a></li>
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
