@extends('nav')
@section('style')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="\css\welcome\dist\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- Google Font -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"
     rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="\css\welcome\bootstrap.min.css" >
    <link rel="stylesheet" href="\css\welcome\font-awesome.min.css" >
    <link rel="stylesheet" href="\css\welcome\elegant-icons.css" >
    <link rel="stylesheet" href="\css\welcome\jquery-ui.min.css" >
    <link rel="stylesheet" href="\css\welcome\nice-select.css" >
    <link rel="stylesheet" href="\css\welcome\owl.carousel.min.css" >
    <link rel="stylesheet" href="\css\welcome\magnific-popup.css" >
    <link rel="stylesheet" href="\css\welcome\slicknav.min.css" >
    <link rel="stylesheet" href="\css\welcome\style.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
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

    <title>welcome</title>

    <!-- Background image settings -->
    <style>
        /* Default height for small devices */
        .type{
            width: 20%;
            border-radius: 10%;
            align-content: center;
            text-align: center;
            background: #4b384c;
            background: -moz-linear-gradient(-45deg, #4b384c 15%, #da5de2 100%);
            background: -webkit-linear-gradient(-45deg, #4b384c 15%,#da5de2 100%);
            background: linear-gradient(135deg, #4b384c 15%,#da5de2 100%);
        }

        #Background_image {
            background-image: url("welcome.jpg");
            height: 400px;
        }

        /* Height for devices larger than 992px */
        @media (min-width: 992px) {
        #Background_image {
            background-image: url("welcome.jpg");
            height: 600px;
        }
        }
    </style>
        <!--search bar settings -->
    <style>
            *, *::before, *::after { box-sizing: border-box; }

            body {
            background: HSLA(0, 0%, 96%, 1.00);
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
            margin-top: 100px;
            }

            .product-search {
            display: flex;
            align-items: center;
            background: white;
            border-radius: 5px;
            margin: 0 auto;
            box-shadow: rgba(0,0,0,.172549) 0 6px 12px 0;
            cursor: pointer;
            }

            .search-element {
            display: flex;
            flex-grow: 2;
            flex-direction: column;
            border-right: 1px solid rgba(10,10,10,.1);
            padding: 1em;
            }

            .search-label {
            font-weight: 700;
            }

            .search-input {
            border: none;
            appearance: none;
            outline: none;
            width: 100%;
            font-size: 1.2em;
            line-height: 1.2em;
            margin-top: 5px;
            }

            .search-input:focus {
            box-shadow: 0px 2px 0px 0px darkturquoise;
            }

            #search-button {
            display: inline-block;
            flex-grow: 1;
            height: 80px;
            line-height: 80px;
            padding: 0 2em;
            text-align: center;
            font-size: 1.2em;
            font-weight: 100;
            border: 0;
            border-top-left-radius: 0px;
            border-bottom-left-radius: 0px;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            color: white;

            transition: background-color 1s ease;
            }
            <!--  /*0.8s*/  -->
            #search-button:hover {
            background-color: darkturquoise ;
            }
            .label{
                font-size: 12px;
                font-weight: 600;
                text-transform: uppercase;
                padding: 3px 10px 2px;
                display: inline-block;
                background: #0166D0;
                color: #ffffff;
            }
            #Background_image{
                background-image: url("/img/welcome.jpg");
            }

            .style_txt{
                font-family: 'Abril Fatface', cursive;
                font-size: 40px;
                text-decoration-color: aliceblue!important;
            }

    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12">
            @if(Session::has('message'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                    {{ Session::get('message') }} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </svg>
                </div>

            @endif
        </div>
    </div>

    <div id="Background_image" class="p-5 text-center bg-image">
        <div class="mask" style="background-color: rgba(6, 184, 255, 0.349);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-black">
                <h1 class="mb-3 style_txt">Particulier à Particulier</h1>
                <h5 class="mb-4 ">Annonces particulières pour vos biens particuliers</h5>
                <a class="btn btn-outline-light btn-lg m-2"
                    href="@if(isset(Auth::user()->etat)) @if(Auth::user()->etat == "inactive" || Auth::user()->etat == "desactive" || Auth::user()->etat == "bloque"){{route('resultat')}}?res=fail @endif @else {{route('first_page')}} @endif"
                    role="button"
                    rel="nofollow"
                    target="_blank">Cree annonce</a>
                    @if (Route::has('register'))
                        <a class="btn btn-outline-light btn-lg m-2"
                           href="{{ route('register') }}"
                           target="_blank"
                           role="button">S'inscrire </a>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->

<!--search bar -->
<form action="{{ route('search') }}" method="get">
    <div class="product-search">
        <div class="search-element">
            <label class="search-label">le bien que vous cherchez ?</label>
            <select name="bein">
                <option value="Appartement">Appartement</option>
                <option value="Maisson">Maisson</option>
                <option value="Villa">Villa</option>
                <option value="Magasin">Magasin</option>
                <option value="Terrain">Terrain</option>
                <option value="Ferme">Ferme</option>
                <option value="Plateaux">Plateaux</option>
                <option value="Bureaux">Bureaux</option>
            </select>
        </div>
        <div class="search-element">
            <label class="search-label">Où cherchez-vous ?</label>
            <select name="ville">
                <option value="Casablanca">Casablanca</option>
                <option value="Rabat">Rabat</option>
                <option value="Fes">Fes</option>
                <option value="Agadir">Agadir</option>
                <option value="Marrakesh">Marrakesh</option>
                <option value="Tanger">Tanger</option>
                <option value="Sale">Sale</option>
                <option value="Khenifra">Khenifra</option>
                <option value="Oujda">Oujda</option>
                <option value="Kenitra">Kenitra</option>
                <option value="Tetouan">Tetouan</option>
                <option value="Safi">Safi</option>
                <option value="Asfi">Asfi</option>
                <option value="Temara">Temara</option>
                <option value="Jedida">Jedida</option>
                <option value="Dakhla">Dakhla</option>
                <option value="Laayon">Laayon</option>
                <option value="Essaouira">Essaouira</option>
                <option value="Larache">Larache</option>
                <option value="Taoudant">Taoudant</option>
            </select>
        </div>
        <div class="search-element">
            <label class="search-label">quelle type de transaction ?</label>
            <select name="transaction">
                <option value="vente">Vente</option>
                <option value="location mois">Location(mois)</option>
                <option value="location Jour">Location(jour)</option>
            </select>
        </div>
        <div id="search-button">
            <button class="btn btn-info btn-lg" type="submit" >Chercher</button>
        </div >
    </div>
</form>
<!--search bar -->


   <hr>

   {{-- properties section --}}
   <section class="property-section latest-property-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title">
                    <h4>Nos derniers biens </h4>

                </div>
            </div>
            <div class="col-lg-7">
                <div class="property-controls">
                    <ul>
                        <li data-filter="all">Tous</li>
                        <li data-filter=".apart">Immobilier</li>
                        <li data-filter=".house">Service</li>
                        <li data-filter=".office">Terrain</li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="row property-filter">
                @php
                    $i = 0; $cont = 8;
                @endphp
                @foreach ($annonces as $annonce)
                    @if ($annonce['bein_type'] == "service")
                        <div class="col-lg-4 col-md-6 mix all house">
                     @endif
                    @if ($annonce['bein_type'] == "immobilier")
                        <div class="col-lg-4 col-md-6 mix all apart">
                    @endif
                    @if ($annonce['bein_type'] == "terrain")
                        <div class="col-lg-4 col-md-6 mix all office">
                    @endif
                        <div class="property-item">
                            <div class="pi-pic set-bg" data-setbg="/uploads/{{ $imgs[$i] }}">
                                @php
                                    $i++;
                                @endphp
                                <div class="label">{{ $annonce['transaction'] }}</div>
                                <div class="btn-secondary type float-end">{{ $annonce['bein_type'] }}</div>
                            </div>
                            <div class="pi-text">
                                <div class="pt-price">{{ $annonce['prix'] }} DH<span>
                                    @if ($annonce['transaction'] == "vente")@endif
                                    @if ($annonce['transaction'] == "location mois") \mois @endif
                                    @if ($annonce['transaction'] == "location jour") \jour @endif
                                </span></div>
                                <h5><a href="{{ route('last_page.show',$annonce['id']) }}">{{ $annonce['titre'] }}</a></h5>
                                <p><img src="https://img.icons8.com/ios-filled/50/26e07f/marker.png" width="20x20"/> {{ $annonce['ville'] }}</p>
                                <hr>
                                <ul>
                                    @if($annonce['bein_type'] == "immobilier")
                                        @foreach ($immobilier as $item)
                                            @if ($item['id'] == $annonce['bein_ID'])
                                                <li><img src="https://img.icons8.com/ios/50/000000/surface.png" width="20x20"/>{{ $item['surface_totale'] }} </li>
                                                <li><i class="fa fa-bathtub"></i> {{ $item['salle_de_bain'] }} </li>
                                                <li><i class="fa fa-bed"></i> {{ $item['chambre'] }}</li>
                                                <li><i class='Medium material-icons' >weekend </i> {{ $item['salon'] }}</li>

                                            @endif
                                        @endforeach
                                    @endif

                                    @if($annonce['bein_type'] == "service")
                                        @foreach ($service as $item)
                                            @if ($item['id'] == $annonce['bein_ID'])
                                                <li><img src="https://img.icons8.com/ios/50/000000/surface.png" width="20x20"/>{{ $item['surface_totale'] }} </li>
                                                <li><img src="https://img.icons8.com/ios-filled/50/000000/door-opened.png" width="20x20"/>{{ $item['nbr_piece'] }} </li>
                                                <li><img src="https://img.icons8.com/ios-glyphs/30/000000/stairs-up.png" width="20x20"/> {{ $item['etage'] }}</li>
                                            @endif
                                        @endforeach
                                    @endif

                                    @if($annonce['bein_type'] == "terrain")
                                        @foreach ($terrain as $item)
                                            @if ($item['id'] == $annonce['bein_ID'])
                                                <li><img src="https://img.icons8.com/ios/50/000000/surface.png" width="20x20"/>{{ $item['surface_totale'] }} </li>
                                                <li><img src="\img\zoning.png" alt="zone" width="10%">{{ $item['zonning'] }} </li>

                                            @endif
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>

                @endforeach
                        </div>
                        </div>
            </div>
    </div>




</section>




<script src="js/welcome/jquery-3.3.1.min.js"></script>
<script src="js/welcome/bootstrap.min.js"></script>
<script src="js/welcome/jquery.magnific-popup.min.js"></script>
<script src="js/welcome/mixitup.min.js"></script>
<script src="js/welcome/jquery-ui.min.js"></script>
<script src="js/welcome/jquery.nice-select.min.js"></script>
<script src="js/welcome/jquery.slicknav.js"></script>
<script src="js/welcome/owl.carousel.min.js"></script>
<script src="js/welcome/jquery.richtext.min.js"></script>
<script src="js/welcome/image-uploader.min.js"></script>
<script src="js/welcome/main.js"></script>
@endsection
