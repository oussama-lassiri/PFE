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
        <!--  0.8s  -->
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
    </style>
@endsection

@section('content')
    <div id="Background_image" class="p-5 text-center bg-image">
        <div class="mask" style="background-color: rgba(6, 184, 255, 0.349);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-black">
                <h1 class="mb-3">Particulier à Particulier</h1>
                <h5 class="mb-4">Annonces particuliers pour vos biens particuliers</h5>
                <a class="btn btn-outline-light btn-lg m-2"
                    href=""
                    role="button"
                    rel="nofollow"
                    target="_blank">Cree annonce</a>
                <a class="btn btn-outline-light btn-lg m-2"
                    href=""
                    target="_blank"
                    role="button">S'inscrire </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->

<!--search bar -->
<form action="" method="get">
    <div class="product-search">
        <div class="search-element">
            <label class="search-label">Type de bien que vous cherchez ?</label>
            <input class="search-input" type="text" autocomplete="on" placeholder="Habitable | Service | Immobilier " name="query">
        </div>
        <div class="search-element">
            <label class="search-label">Où cherchez-vous ?</label>
            <input class="search-input" type="text" placeholder="ville" class="" autocomplete="on" name="location">
        </div>
        <div class="search-element">
            <label class="search-label">quelle type de transaction ?</label>
            <input class="search-input" type="text" placeholder="vendre | louer" class="" autocomplete="on" name="location">
        </div>
        <div id="search-button">
            <button class="btn btn-info btn-lg" type="submit" >Chercher</button>
        </div > 
    </div>
</form>
<!--search bar -->

   <div>
       <br>
       <br>
      
       <br>
       <br>
   </div>

   <hr>

   {{-- properties section --}}
   <section class="property-section latest-property-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title">
                    <h4>Latest PROPERTY</h4>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="property-controls">
                    <ul>
                        <li data-filter="all">All</li>
                        <li data-filter=".apart">Apartment</li>
                        <li data-filter=".house">House</li>
                        <li data-filter=".office">Office</li>
                        <li data-filter=".hotel">Hotel</li>
                        <li data-filter=".restaurent">Restaurent</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row property-filter">
            <div class="col-lg-4 col-md-6 mix all house">
                <div class="property-item">
                    <div class="pi-pic set-bg" data-setbg="img/property/property-1.jpg">
                        <img src="img/property/property-1.jpg" alt="">
                        <div class="label">For rent</div>
                    </div>
                    <div class="pi-text">
                        <div class="pt-price">$ 289.0<span>/month</span></div>
                        <h5><a href="#">Home in Merrick Way</a></h5>
                        <p><img src="https://img.icons8.com/ios-filled/50/26e07f/marker.png" width="20x20"/> 3 Middle Winchendon Rd, Rindge, NH 03461</p>
                        <ul>
                            <li><img src="https://img.icons8.com/ios/50/000000/surface.png" width="20x20"/> 2, 283</li>
                            <li><i class="fa fa-bathtub"></i> 03</li>
                            <li><i class="fa fa-bed"></i> 05</li>
                            <li><i class="fa fa-automobile"></i> 01</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mix all house">
                <div class="property-item">
                    <div class="pi-pic set-bg" data-setbg="img/property/property-1.jpg">
                        <img src="img/property/property-1.jpg" alt="">
                        <div class="label">For rent</div>
                    </div>
                    <div class="pi-text">
                        <div class="pt-price">$ 289.0<span>/month</span></div>
                        <h5><a href="#">Home in Merrick Way</a></h5>
                        <p><span class="icon_pin_alt"></span> 3 Middle Winchendon Rd, Rindge, NH 03461</p>
                        <ul>
                            <li> 2, 283</li>
                            <li><i class="fa fa-bathtub"></i> 03</li>
                            <li><i class="fa fa-bed"></i> 05</li>
                            <li><i class="fa fa-automobile"></i> 01</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mix all house">
                <div class="property-item ">
                    <div class="pi-pic set-bg" data-setbg="img/property/property-1.jpg">
                        <img src="img/property/property-1.jpg" alt="">
                        <div class="label">For rent</div>
                    </div>
                    <div class="pi-text">
                        <div class="pt-price">$ 289.0<span>/month</span></div>
                        <h5><a href="#">Home in Merrick Way</a></h5>
                        <p><img src="https://img.icons8.com/ios-filled/50/26e07f/marker.png" width="20x20"/> 3 Middle Winchendon Rd, Rindge, NH 03461</p>
                        <ul>
                            <li><img src="https://img.icons8.com/ios/50/000000/surface.png" width="20x20"/> 2, 283</li>
                            <li><i class="fa fa-bathtub"></i> 03</li>
                            <li><i class="fa fa-bed"></i> 05</li>
                            <li><i class="fa fa-automobile"></i> 01</li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

{{-- statictics --}}
<section class="team-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="section-title">
                    <h4>Les statistic</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="ts-item">
                    <div class="ts-text">
                        <img src="https://img.icons8.com/stickers/100/000000/real-estate.png"/>
                        <h5>Immobilier</h5>
                        <span>123</span>
                        <p>Maisson: 67 Appartement: 190 Villa: 10</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ts-item">
                    <div class="ts-text">
                        <img src="https://img.icons8.com/color/48/000000/garage-closed.png"/>
                        <h5>Service</h5>
                        <span>123</span>
                        <p>Magasin: 20 Plateau: 90 Bureaux : 10</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ts-item">
                    <div class="ts-text">
                        <img src="https://img.icons8.com/fluency/48/000000/ground.png"/>
                        <h5>Terrain</h5>
                        <span>123</span>
                        <p>Terrain: 30 Ferme: 20</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
