<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/css/morris.css">
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/icons.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/metismenu.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/waves.min.js"></script>
<!--Morris Chart-->
<script src="assets/js/morris.min.js"></script>
<script src="assets/js/raphael.min.js"></script>
<script src="assets/js/dashboard.init.js"></script>
<!-- App js -->
<script src="assets/js/app.js"></script>
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
                        <a href="#" class="waves-effect">
                            <i class="icon-accelerator"></i>
                            <span class="badge badge-success badge-pill float-right">9+</span>
                            <span> Dashboard </span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect">
                            <i class="icon-mail-open"></i>
                            <span> Utilisateurs
                                <span class="float-right menu-arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </span>
                        </a>
                        <ul class="submenu">
                            <li><a href="#">Liste des utilisateurs</a></li>
                            <ul class="submenu">
                                <li><a href="#"> Ajout d'utilisateur</a></li>
                                <li>
                                    <a href="#">Gestion des comptes <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                    <ul class="submenu">
                                        <li><a href="#">Activer</a></li>
                                        <li><a href="#">Désactiver</a></li>
                                        <li><a href="#">Supprimer</a></li>
                                        <li><a href="#">Bloquer</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect">
                            <i class="icon-paper-sheet"></i>
                            <span> Annonces  <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="#">Nouveaux annonces</a></li>
                            <ul class="submenu">
                                <li>
                                    <a href="#">Gestion d'annonces
                                        <span class="float-right menu-arrow">
                                            <i class="mdi mdi-chevron-right"></i>
                                        </span>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="#">Activer</a></li>
                                        <li><a href="#">Désactiver</a></li>
                                        <li><a href="#">Supprimer</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect">
                            <i class="icon-graph"></i>
                            <span> Statistiques <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="#">Annonces</a></li>
                            <li><a href="#">Utilisateurs</a></li>
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
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end page-title -->

                <div class="row">

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-heading p-4">
                                <div class="mini-stat-icon float-right">
                                    <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                                </div>
                                <div>
                                    <h5 class="font-16">Sessions actives</h5>
                                </div>
                                <h3 class="mt-4">43,225</h3>
                                <div class="progress mt-4" style="height: 4px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">75%</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-heading p-4">
                                <div class="mini-stat-icon float-right">
                                    <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                                </div>
                                <div>
                                    <h5 class="font-16">Total d'utilisateurs</h5>
                                </div>
                                <h3 class="mt-4">73,265</h3>
                                <div class="progress mt-4" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">88%</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-heading p-4">
                                <div class="mini-stat-icon float-right">
                                    <i class="mdi mdi-tag-text-outline bg-warning text-white"></i>
                                </div>
                                <div>
                                    <h5 class="font-16">Total d'annonces</h5>
                                </div>
                                <h3 class="mt-4">447</h3>
                                <div class="progress mt-4" style="height: 4px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">68%</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-heading p-4">
                                <div class="mini-stat-icon float-right">
                                    <i class="mdi mdi-buffer bg-danger text-white"></i>
                                </div>
                                <div>
                                    <h5 class="font-16">Annonce ajouté</h5>
                                </div>
                                <h3 class="mt-4">86%</h3>
                                <div class="progress mt-4" style="height: 4px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">82%</span></p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title mb-4">Graphique à aires </h4>

                                <div id="morris-area-example" class="morris-charts morris-chart-height"></div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Graphique circulaire</h4>

                                <div id="morris-donut-example" class="morris-charts morris-chart-height"></div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Nouveau utilisateurs</h4>
                                <div class="friends-suggestions">
                                    <a href="#" class="friends-suggestions-list">
                                        <div class="border-bottom position-relative">
                                            <div class="float-left mb-0 mr-3">
                                                <img src="assets/images/user-2.jpg" alt="" class="rounded-circle thumb-md">
                                            </div>
                                            <div class="suggestion-icon float-right mt-2 pt-1">
                                                <i class="mdi mdi-eye"></i>
                                                <i class="mdi mdi-check"></i>
                                            </div>


                                            <div class="desc">
                                                <h5 class="font-14 mb-1 pt-2">Ralph Ramirez</h5>
                                                <p class="text-muted">3 Friend suggest</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="friends-suggestions-list">
                                        <div class="border-bottom position-relative">
                                            <div class="float-left mb-0 mr-3">
                                                <img src="assets/images/user-3.jpg" alt="" class="rounded-circle thumb-md">
                                            </div>
                                            <div class="suggestion-icon float-right mt-2 pt-1">
                                                <i class="mdi mdi-eye"></i>
                                                <i class="mdi mdi-check"></i>
                                            </div>

                                            <div class="desc">
                                                <h5 class="font-14 mb-1 pt-2">Patrick Beeler</h5>
                                                <p class="text-muted">17 Friend suggest</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="friends-suggestions-list">
                                        <div class="border-bottom position-relative">
                                            <div class="float-left mb-0 mr-3">
                                                <img src="assets/images/user-4.jpg" alt="" class="rounded-circle thumb-md">
                                            </div>
                                            <div class="suggestion-icon float-right mt-2 pt-1">
                                                <i class="mdi mdi-eye"></i>
                                                <i class="mdi mdi-check"></i>
                                            </div>

                                            <div class="desc">
                                                <h5 class="font-14 mb-1 pt-2">Victor Zamora</h5>
                                                <p class="text-muted">12 Friend suggest</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="friends-suggestions-list">
                                        <div class="border-bottom position-relative">
                                            <div class="float-left mb-0 mr-3">
                                                <img src="assets/images/user-5.jpg" alt="" class="rounded-circle thumb-md">
                                            </div>
                                            <div class="suggestion-icon float-right mt-2 pt-1">
                                                <i class="mdi mdi-eye"></i>
                                                <i class="mdi mdi-check"></i>
                                            </div>

                                            <div class="desc">
                                                <h5 class="font-14 mb-1 pt-2">Bryan Lacy</h5>
                                                <p class="text-muted">18 Friend suggest</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="friends-suggestions-list">
                                        <div class="position-relative">
                                            <div class="float-left mb-0 mr-3">
                                                <img src="assets/images/user-6.jpg" alt="" class="rounded-circle thumb-md">
                                            </div>
                                            <div class="suggestion-icon float-right mt-2 pt-1">
                                                <i class="mdi mdi-eye"></i>
                                                <i class="mdi mdi-check"></i>
                                            </div>

                                            <div class="desc">
                                                <h5 class="font-14 mb-1 pt-2">James Sorrells</h5>
                                                <p class="text-muted mb-1">6 Friend suggest</p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Statistiques des annonces</h4>
                                <div id="morris-line-example" class="morris-chart" style="height: 360px"></div>

                            </div>
                        </div>

                    </div>

                    <div class="col-xl-4">
                        <!--
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title mb-4">Recent Activity</h4>
                                <ol class="activity-feed mb-0">
                                    <li class="feed-item">
                                        <div class="feed-item-list">
                                            <p class="text-muted mb-1">Now</p>
                                            <p class="font-15 mt-0 mb-0">Jassa magna Jassa, risus posted a new article: <b class="text-primary">Forget UX Rowland</b></p>
                                        </div>
                                    </li>
                                    <li class="feed-item">
                                        <p class="text-muted mb-1">Yesterday</p>
                                        <p class="font-15 mt-0 mb-0">Jassa posted a new article: <b class="text-primary">Designer Alex</b></p>
                                    </li>
                                    <li class="feed-item">
                                        <p class="text-muted mb-1">2:30PM</p>
                                        <p class="font-15 mt-0 mb-0">Jassa, Jassa, Jassa Commented <b class="text-primary"> Developer Moreno</b></p>
                                    </li>
                                    <li class="feed-item pb-1">
                                        <p class="text-muted mb-1">12:48 PM</p>
                                        <p class="font-15 mt-0 mb-2">Jassa, Jassa Commented <b class="text-primary">UX Murphy</b></p>
                                    </li>

                                </ol>

                            </div>
                        </div>
                        -->
                    </div>
                </div>

                <!-- START ROW -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Liste des utilisateurs</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Nbre d'annonces</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Ville</th>
                                            <th scope="col" colspan="2">Rejoignez à</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Jassa</td>
                                            <td><span class="badge badge-success">Delivered</span></td>
                                            <td>$9,420,000</td>
                                            <td>
                                                <div>
                                                    <img src="assets/images/user-2.jpg" alt="" class="thumb-md rounded-circle mr-2"> Jassa
                                                </div>
                                            </td>
                                            <td>Ludhiana</td>
                                            <td>15/1/2021</td>

                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                        </svg>
                                                    </a>

                                                    <a href="#" class="btn btn-primary btn-sm" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                                        </svg>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jassa</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>$3,120,000</td>
                                            <td>
                                                <div>
                                                    <img src="assets/images/user-3.jpg" alt="" class="thumb-md rounded-circle mr-2"> Jassa
                                                </div>
                                            </td>
                                            <td>Ludhiana</td>
                                            <td>16/1/2021</td>

                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                        </svg>
                                                    </a>

                                                    <a href="#" class="btn btn-primary btn-sm" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jassa</td>
                                            <td><span class="badge badge-success">Delivered</span></td>
                                            <td>$6,360,000</td>
                                            <td>
                                                <div>
                                                    <img src="assets/images/user-4.jpg" alt="" class="thumb-md rounded-circle mr-2"> Jassa
                                                </div>
                                            </td>
                                            <td>Ludhiana</td>
                                            <td>17/1/2021</td>

                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jassa</td>
                                            <td><span class="badge badge-danger">Cancel</span></td>
                                            <td>$5,200,000</td>
                                            <td>
                                                <div>
                                                    <img src="assets/images/user-5.jpg" alt="" class="thumb-md rounded-circle mr-2"> Jassa
                                                </div>
                                            </td>
                                            <td>Ludhiana</td>
                                            <td>18/1/2021</td>

                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jassa</td>
                                            <td><span class="badge badge-success">Delivered</span></td>
                                            <td>$7,250,000</td>
                                            <td>
                                                <div>
                                                    <img src="assets/images/user-6.jpg" alt="" class="thumb-md rounded-circle mr-2"> Jassa
                                                </div>
                                            </td>
                                            <td>Ludhiana</td>
                                            <td>19/1/2021</td>

                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- END ROW -->

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

</body>
</html>
