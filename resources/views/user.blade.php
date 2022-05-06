@extends('nav')

@section('style')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/user/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
@endsection
@section('content')
<div class="profile-page">
    
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('http://wallpapere.org/wp-content/uploads/2012/02/black-and-white-city-night.png');"></div>
    <div class="main main-raised">
		<div class="profile-content">
            <div class="container">
                <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile">
                                <div class="avatar">
                                    <img src="https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTU0NjQzOTk4OTQ4OTkyMzQy/ansel-elgort-poses-for-a-portrait-during-the-baby-driver-premiere-2017-sxsw-conference-and-festivals-on-march-11-2017-in-austin-texas-photo-by-matt-winkelmeyer_getty-imagesfor-sxsw-square.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                                </div>
                                <div class="name">
                                    <h3 class="title">{{ $user['name']}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="description text-center">
                    <div class="tab-pane show " id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>CIN</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $user['cin'] }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Age</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $user['age']}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $user['email']}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Telephone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $user['phone']}}</p>
                                            </div>
                                        </div>
                            </div>
                </div>
				<div class="row">
					<div class="col-md-6 ml-auto mr-auto">
                        <div class="profile-tabs">
                          <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                                  <i class="fas fa-file-alt"></i>
                                  Annonce
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                                <i class="fas fa-user-edit"></i>
                                Compte
                                </a>
                            </li>   
                          </ul>
                        </div>
                    </div>
                </div>
        
          <div class="tab-content tab-space">
            <div class="tab-pane active text-center gallery" id="studio">
  				<div class="row">
                    <div class="row row-cols-3 row-cols-md-3 g-4">
                        @foreach ($annonce as $item)
                            <div class="col">
                                <div class="card ">
        
                                        <img src="\uploads\{{$item['images_path']}}" class="card-img-top" alt="...">
                                        
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item['bein_type'] }}</h5>
                                        <p class="card-text">{{ $item['titre'] }}.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">{{ $item['transaction'] }}</li>
                                        <li class="list-group-item">{{ $item['ville'] }}</li>
                                        <li class="list-group-item">Prix:   {{ $item['prix'] }}DH</li>
                                        <li class="list-group-item">Etat:   {{ $item['etat'] }}</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="btn btn-success  float-end">Modifie</a>
                                        <a href="#" class="btn btn-danger  float-start">Supprimer</a>
                                        <a href="#" class="btn btn-info ">@if ($item['etat'] == "active")
                                            {{ "desactiver" }}
                                            @else
                                            {{ "Activer" }}
                                        @endif </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                     </div>
  				</div>
  			</div>
              
            <div class="tab-pane text-center gallery" id="works">
            <h5>Etat de compte:</h5>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span>
                            <em></em>
                            <strong></strong>
                        </span>
                    </label>
                    <div class="container modifie">
                    <h5 style="position:absolute;right:45%;">Modfie les informations personnelle:</h5>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="info-item">
                            <label class="icon" for="name"><i class="fas fa-user"></i></label>
                            <input type="text" name="name" id="name" value="{{ $user['name']}}" placeholder="Nom" required autocomplete="name" autofocus/>
                        </div>

                        <div class="info-item">
                            <label class="icon" for="cin"><i class="fas fa-id-badge "></i></label>
                            <input type="text"  name="cin" id="cin" value="{{ $user['cin']}}" placeholder="CIN" required autocomplete="cin"/>
                        </div>

                        <div  class="info-item">
                            <label class="icon" for="age"><i class="fas fa-calendar"></i></i></label>
                            <input type="number" name="age" id="age" value="{{ $user['age']}}" placeholder="Age" required autocomplete="age"/>
                        </div>

                        <div  class="info-item">
                            <label class="icon" for="email"><i class="fas fa-envelope"></i></label>
                            <input type="text" class="" name="email" id="email" value="{{ $user['email']}}" placeholder="Email" required autocomplete="email"/>
                        </div>

                        <div  class="info-item">
                            <label class="icon" for="phone"><i class="fas fa-phone"></i></label>
                            <input type="phone" name="phone" id="phone" value="{{ $user['phone']}}" placeholder="Telephone" required autocomplete="phone"/>
                        </div>

                        <div  class="info-item">
                            <label class="icon" for="password"><i class="fas fa-unlock-alt"></i></label>
                            <input type="password" name="password" id="password" class="" value="{{ $user['password']}}" placeholder="Mot de passe" required autocomplete="new-password"/>
                        </div>
                        <button type="submit" class="sbt">Enregistre</button>
                    </form>
                </div>
  			</div>
          </div>

        
            </div>
        </div>
	</div>
  
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>
    var big_image;

        $(document).ready(function() {
        BrowserDetect.init();

        // Init Material scripts for buttons ripples, inputs animations etc, more info on the next link https://github.com/FezVrasta/bootstrap-material-design#materialjs
        $('body').bootstrapMaterialDesign();

        window_width = $(window).width();

        $navbar = $('.navbar[color-on-scroll]');
        scroll_distance = $navbar.attr('color-on-scroll') || 500;

        $navbar_collapse = $('.navbar').find('.navbar-collapse');

        //  Activate the Tooltips
        $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();

        // Activate Popovers
        $('[data-toggle="popover"]').popover();

        if ($('.navbar-color-on-scroll').length != 0) {
            $(window).on('scroll', materialKit.checkScrollForTransparentNavbar);
        }

        materialKit.checkScrollForTransparentNavbar();

        if (window_width >= 768) {
            big_image = $('.page-header[data-parallax="true"]');
            if (big_image.length != 0) {
            $(window).on('scroll', materialKit.checkScrollForParallax);
            }

        }


        });

        $(document).on('click', '.navbar-toggler', function() {
        $toggle = $(this);

        if (materialKit.misc.navbar_menu_visible == 1) {
            $('html').removeClass('nav-open');
            materialKit.misc.navbar_menu_visible = 0;
            $('#bodyClick').remove();
            setTimeout(function() {
            $toggle.removeClass('toggled');
            }, 550);

            $('html').removeClass('nav-open-absolute');
        } else {
            setTimeout(function() {
            $toggle.addClass('toggled');
            }, 580);


            div = '<div id="bodyClick"></div>';
            $(div).appendTo("body").click(function() {
            $('html').removeClass('nav-open');

            if ($('nav').hasClass('navbar-absolute')) {
                $('html').removeClass('nav-open-absolute');
            }
            materialKit.misc.navbar_menu_visible = 0;
            $('#bodyClick').remove();
            setTimeout(function() {
                $toggle.removeClass('toggled');
            }, 550);
            });

            if ($('nav').hasClass('navbar-absolute')) {
            $('html').addClass('nav-open-absolute');
            }

            $('html').addClass('nav-open');
            materialKit.misc.navbar_menu_visible = 1;
        }
        });

        materialKit = {
        misc: {
            navbar_menu_visible: 0,
            window_width: 0,
            transparent: true,
            fixedTop: false,
            navbar_initialized: false,
            isWindow: document.documentMode || /Edge/.test(navigator.userAgent)
        },

        initFormExtendedDatetimepickers: function() {
            $('.datetimepicker').datetimepicker({
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            }
            });
        },

        initSliders: function() {
            // Sliders for demo purpose
            var slider = document.getElementById('sliderRegular');

            noUiSlider.create(slider, {
            start: 40,
            connect: [true, false],
            range: {
                min: 0,
                max: 100
            }
            });

            var slider2 = document.getElementById('sliderDouble');

            noUiSlider.create(slider2, {
            start: [20, 60],
            connect: true,
            range: {
                min: 0,
                max: 100
            }
            });
        },

        checkScrollForParallax: function() {
            oVal = ($(window).scrollTop() / 3);
            big_image.css({
            'transform': 'translate3d(0,' + oVal + 'px,0)',
            '-webkit-transform': 'translate3d(0,' + oVal + 'px,0)',
            '-ms-transform': 'translate3d(0,' + oVal + 'px,0)',
            '-o-transform': 'translate3d(0,' + oVal + 'px,0)'
            });
        },

        checkScrollForTransparentNavbar: debounce(function() {
            if ($(document).scrollTop() > scroll_distance) {
            if (materialKit.misc.transparent) {
                materialKit.misc.transparent = false;
                $('.navbar-color-on-scroll').removeClass('navbar-transparent');
            }
            } else {
            if (!materialKit.misc.transparent) {
                materialKit.misc.transparent = true;
                $('.navbar-color-on-scroll').addClass('navbar-transparent');
            }
            }
        }, 17)
        };

        // Returns a function, that, as long as it continues to be invoked, will not
        // be triggered. The function will be called after it stops being called for
        // N milliseconds. If `immediate` is passed, trigger the function on the
        // leading edge, instead of the trailing.

        function debounce(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this,
            args = arguments;
            clearTimeout(timeout);
            timeout = setTimeout(function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
            }, wait);
            if (immediate && !timeout) func.apply(context, args);
        };
        };

        var BrowserDetect = {
        init: function() {
            this.browser = this.searchString(this.dataBrowser) || "Other";
            this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "Unknown";
        },
        searchString: function(data) {
            for (var i = 0; i < data.length; i++) {
            var dataString = data[i].string;
            this.versionSearchString = data[i].subString;

            if (dataString.indexOf(data[i].subString) !== -1) {
                return data[i].identity;
            }
            }
        },
        searchVersion: function(dataString) {
            var index = dataString.indexOf(this.versionSearchString);
            if (index === -1) {
            return;
            }

            var rv = dataString.indexOf("rv:");
            if (this.versionSearchString === "Trident" && rv !== -1) {
            return parseFloat(dataString.substring(rv + 3));
            } else {
            return parseFloat(dataString.substring(index + this.versionSearchString.length + 1));
            }
        },

        dataBrowser: [{
            string: navigator.userAgent,
            subString: "Chrome",
            identity: "Chrome"
            },
            {
            string: navigator.userAgent,
            subString: "MSIE",
            identity: "Explorer"
            },
            {
            string: navigator.userAgent,
            subString: "Trident",
            identity: "Explorer"
            },
            {
            string: navigator.userAgent,
            subString: "Firefox",
            identity: "Firefox"
            },
            {
            string: navigator.userAgent,
            subString: "Safari",
            identity: "Safari"
            },
            {
            string: navigator.userAgent,
            subString: "Opera",
            identity: "Opera"
            }
        ]

        };
</script>

    </div>
@endsection