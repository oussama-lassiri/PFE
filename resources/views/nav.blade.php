<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="icon" href="\img\logo.png" sizes="16x16 32x32">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
         <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
        rel="stylesheet"
        />
        @yield('style')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <style type="text/css">

            /* ============ desktop view ============ */
            @media all and (min-width: 992px) {

                .dropdown-menu li{
                    position: relative;
                }
                .annonce{
                    position: relative;
                    left: 30%;
                }
                .dropdown-menu .submenu{
                    display: none;
                    position: absolute;
                    left:100%; top:-7px;
                }
                .dropdown-menu .submenu-left{
                    right:100%; left:auto;
                }

                .dropdown-menu > li:hover{ background-color: #f1f1f1 }
                .dropdown-menu > li:hover > .submenu{
                    display: block;
                }
            }
            /* ============ desktop view .end// ============ */

            /* ============ small devices ============ */
            @media (max-width: 991px) {

            .dropdown-menu .dropdown-menu{
                    margin-left:0.7rem; margin-right:0.7rem; margin-bottom: .5rem;
            }

            }
            /* ============ small devices .end// ============ */

            </style>


            <script type="text/javascript">
            //	window.addEventListener("resize", function() {
            //		"use strict"; window.location.reload();
            //	});


                document.addEventListener("DOMContentLoaded", function(){


                    /////// Prevent closing from click inside dropdown
                    document.querySelectorAll('.dropdown-menu').forEach(function(element){
                        element.addEventListener('click', function (e) {
                          e.stopPropagation();
                        });
                    })



                    // make it as accordion for smaller screens
                    if (window.innerWidth < 992) {

                        // close all inner dropdowns when parent is closed
                        document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
                            everydropdown.addEventListener('hidden.bs.dropdown', function () {
                                // after dropdown is hidden, then find all submenus
                                  this.querySelectorAll('.submenu').forEach(function(everysubmenu){
                                      // hide every submenu as well
                                      everysubmenu.style.display = 'none';
                                  });
                            })
                        });

                        document.querySelectorAll('.dropdown-menu a').forEach(function(element){
                            element.addEventListener('click', function (e) {

                                  let nextEl = this.nextElementSibling;
                                  if(nextEl && nextEl.classList.contains('submenu')) {
                                      // prevent opening link if link needs to open dropdown
                                      e.preventDefault();
                                      console.log(nextEl);
                                      if(nextEl.style.display == 'block'){
                                          nextEl.style.display = 'none';
                                      } else {
                                          nextEl.style.display = 'block';
                                      }

                                  }
                            });
                        })
                    }
                    // end if innerWidth

                });
                // DOMContentLoaded  end
            </script>


    </head>
    <body>




        <nav class="navbar  navbar-expand-lg fixed-top navbar-light bg-light"> <!-- class= fixed-top // pour fixer la barre-->

        <div class="container-fluid">
                        <!-- NavBar Brand-->
            <a class="navbar-brand" href="">
                        <img
                        src="\img\logo.png"
                        height="45"
                        alt="Particulier Logo"
                        loading="lazy"
                        />
            </a>



            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav  ">
                    <li class="nav-item">
                        <a class="nav-link"  href=" {{ route('welcome') }} ">Accueil</a>
                    </li>

                    <li class="nav-item dropdown">
                        <!-- Navbar dropdown -->
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">  Biens   </a>
                        <ul class="dropdown-menu">

                          <li><a class="dropdown-item" href="#"> Habitable &raquo; </a>
                            <!-- Dropdown sub-menu -->
                               <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" href=" {{ route('search')}}?bein=Appartement  ">appartement</a></li>
                                <li><a class="dropdown-item" href=" {{ route('search')}}?bein=Maisson ">Maison</a></li>
                                <li><a class="dropdown-item" href=" {{ route('search')}}?bein=Villa  "> Villa</a></li>
                             </ul>
                          </li>
                          <li><a class="dropdown-item" href=""> Entreprise &raquo; </a>
                            <!-- Dropdown sub-menu -->
                               <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" href=" {{ route('search') }}?bein=Bureaux ">Bureau</a></li>
                                <li><a class="dropdown-item" href=" {{ route('search') }}?bein=Plateaux  ">Plateau</a></li>
                                <li><a class="dropdown-item" href=" {{ route('search') }}?bein=Magasin ">Magasin</a></li>
                             </ul>
                          </li>
                          <li><a class="dropdown-item" href=""> Immobilier &raquo;</a>
                            <!-- Dropdown sub-menu -->
                               <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" href=" {{ route('search') }}?bein=Terrain ">Terrain</a></li>
                                <li><a class="dropdown-item" href=" {{ route('search') }}?bein=Ferme ">Ferme</a></li>
                             </ul>
                          </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>

                <div class="p-2 annonce bd-highlight animate__animated animate__swing" >   <!-- class="d-grid gap-2  d-md-flex justify-content-md-end " -->
                    <a href="@if(isset(Auth::user()->etat)) @if(Auth::user()->etat == "inactive"){{route('resultat')}}?res=fail @else {{route('first_page.index')}} @endif @endif">
                    <button class="btn btn-info me-md-2 " type="button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 20 20">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>Créé Annonce </button></a>
                </div>
            </div>


            <div class="d-flex flex-row-reverse bd-highlight">
                <div class="p-2 bd-highlight">
                    <!-- lors du redimenssionnement de la page , permet d'avoir un menu burger  -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <ul class="navbar-nav ">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('user_space', ['id' => Auth::user()->id]) }}"> Espace Personnelle</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

            </div>

        </div>
        </nav>
        @yield('content')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
    </body>
</html>
