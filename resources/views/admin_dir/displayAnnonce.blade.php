@extends('admin_dir.theme')
@section('title admin','Gestion Annonce')
@section('style admin')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
        .titre_annonce {
            font-weight: bold;
            color: rgb(255, 255, 255);
            font-size: 24px;
            text-align: left;
        }
        table {
            table-layout: fixed;
            width: 100%;
        }
        .secondTD {
            text-align: center;
        }
        .firstTD {
            text-align: left;
        }
        td {
            padding: 15px;
            //background-color: rgba(255, 255, 255, 0.2);
            color: rgb(255, 255, 255);
        }
        th{
            font-size: larger;
            height: 40px;
            text-align: center;
            //background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
        }


        .slider .photos {
            position: relative;
            height: 45%;
            width: 45%;
        }

        .slider .photos img {
            width: 100%;
            position: absolute;
            left: 0;
            opacity: 0;
            transition: opacity 1s;
        }

        .slider .photos img.shown {
            opacity: 1;
        }

        .prev:before,
        .next:before {
            color: #fff;
            font-size: 100px;
            position: absolute;
            top: 35%;
            cursor: pointer;
        }

        .prev:before {
            content: '<';
            left: 0;
        }

        .next:before {
            content: '>';
            right: 0;
        }

    </style>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"
    />
    <style>
        .trans{
            text-decoration-color: #2b94e5;
        }


    </style>
    <script>
        import { Fancybox, Carousel, Panzoom } from "@fancyapps/ui";
    </script>
    <script>import "@fancyapps/ui/dist/fancybox.css";</script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script type="module">
        import { Fancybox } from "https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.esm.js";
    </script>
    <script type="module">
        import { Fancybox } from "https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.esm.js";
        const myCarousel = new Carousel(document.querySelector("#myCarousel"), {
            'slidesPerPage' : 1,
            'friction' : 0.8
            // Your options go here
        });
    </script>
    <!-- Script for slider -->
    <script>
        window.onload = function() {

            var slider1 = new Slider({
                images: '.slider-1 img',
                btnPrev: '.slider-1 .buttons .prev',
                btnNext: '.slider-1 .buttons .next',
                auto: false
            });

            var slider2 = new Slider({
                images: '.slider-2 img',
                btnPrev: '.slider-2 .buttons .prev',
                btnNext: '.slider-2 .buttons .next',
                auto: true,
                rate: 2000
            });
        }

        function Slider(obj) {

            this.images = document.querySelectorAll(obj.images);
            this.auto = obj.auto;
            this.btnPrev = obj.btnPrev;
            this.btnNext = obj.btnNext;
            this.rate = obj.rate || 1000;

            var i = 0;
            var slider = this;

            this.prev = function () {
                slider.images[i].classList.remove('shown');
                i--;

                if (i < 0) {
                    i = slider.images.length - 1;
                }

                slider.images[i].classList.add('shown');
            }

            this.next = function () {
                slider.images[i].classList.remove('shown');
                i++;

                if (i >= slider.images.length) {
                    i = 0;
                }

                slider.images[i].classList.add('shown');
            }

            document.querySelector(slider.btnPrev).onclick = slider.prev;
            document.querySelector(slider.btnNext).onclick = slider.next;

            if (slider.auto)  {
                setInterval(slider.next, slider.rate);
            }
        };
    </script>

@endsection

@section('page', 'Espace annonce ')

@section('right content')

    <div class="row">

            <div  class="col-xl-4">
                <a href="{{ url()->previous() }}" class="btn btn-info me-md-2" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
                        <path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
                    </svg>
                    Retour
                </a>
                <br><br>
            </div>
            <br>

            <div id="myCarousel" class="carousel" align = "center">
                @foreach ($img as $item)
                    <div class="carousel__slide">
                        <a href="\uploads\{{$item}}" data-fancybox="gallery" data-caption="{{$item}}">
                            <img src="\uploads\{{$item}}" width="400" height="400">
                        </a>
                    </div>
                @endforeach
            </div>
            <br>

            <div class="col-xl-8">
                <span class="titre_annonce">{{$annonce['titre']}}</span>
                <table>
                    <tr >
                        <td class="firstTD " colspan="2"><h3 class="trans">À {{ $trans }}</h3></td>
                        <td colspan="2"><h2><span class="badge bg-info">Prix: {{$annonce['prix']}} DH</span></h2></td>
                    </tr>
                    @if ($annonce['bein_type'] == "immobilier")
                        <tr>
                            <td class="firstTD" width="25%"><i class='Medium material-icons' >hotel </i> Chambre</td>
                            <td class="secondTD" >{{$bein['chambre']}}</td>
                            <td ><i class='Medium material-icons' >place</i>Ville</td>
                            <td >{{$annonce['ville']}}</td>

                        </tr>
                        <tr>
                            <td class="firstTD"><i class='Medium material-icons' >weekend </i> Salon</td>
                            <td class="secondTD">{{$bein['salon']}}</td>
                            <td ><i class='Medium material-icons' >roofing</i>Age de bien</td>
                            <td >{{$bein['age_de_bien']}} ans</td>
                        </tr>
                        <tr>
                            <td class="firstTD"><i class="Medium material-icons ">bathtub</i> Salle de bain</td>
                            <td class="secondTD">{{$bein['salle_de_bain']}}</td>
                            <td ><img src="\img\room.png">Surface totale </td>
                            <td >{{$bein['surface_totale']}} m²</td>
                        </tr>
                        @if (empty($bein['surface_habitable'])  && empty($bein['nbr_etage']) )
                            <tr>
                                <td class="firstTD">
                                    <div class="p-2 flex-fill bd-highlight">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-steps" viewBox="0 0 16 16">
                                            <path d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0zM2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1z"/>
                                        </svg> Etage
                                    </div>
                                </td>
                                <td class="secondTD">Numéro {{$bein['etage']}} </td>
                            </tr>
                        @else
                            <tr>
                                <td class="firstTD">
                                    <div class="p-2 flex-fill bd-highlight">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-steps" viewBox="0 0 16 16">
                                            <path d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0zM2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1z"/>
                                        </svg> Nombre d'étages
                                    </div>
                                </td>
                                <td class="secondTD">{{$bein['nbr_etage']}} étage(s)</td>
                                <td class="firstTD"><img src="\img\room.png">Surface habitable </td>
                                <td >{{$bein['surface_habitable']}} m²</td>
                            </tr>
                        @endif
                    @endif
                    @if ($annonce['bein_type'] == "terrain")
                        <tr>
                            <td class="firstTD" colspan="2">
                                <div class="p-2 flex-fill bd-highlight">
                                    <span><img src="\img\zoning.png" alt="zone" width="10%">  Zoning</span>
                                </div>
                            </td>
                            <td class="secondTD" colspan="2">{{$bein['zonning']}}</td>
                        </tr>
                        <tr>
                            <td class="firstTD" colspan="2">
                                <div class="p-2 flex-fill bd-highlight">
                                    <span><img src="\img\room.png"> Surface totale</span>
                                </div>
                            </td>
                            <td class="secondTD" colspan="2">{{$bein['surface_totale']}} m²</td>
                        </tr>
                        <tr>
                            <td class="firstTD" colspan="2" >
                                <div class="p-2 flex-fill bd-highlight">
                                    <span><i class='Medium material-icons' >place</i>  Ville </span>
                                </div>
                            </td>
                            <td class="secondTD" colspan="2">{{$annonce['ville']}}</td>
                        </tr>
                    @endif
                    @if ($annonce['bein_type'] == "service")
                        <tr>
                            <td class="firstTD" colspan="2">
                                <div class="p-2 flex-fill bd-highlight">
                                    <img src="\img\piece.png" alt="zone" width="10%">  Nombre de pièces
                                </div>
                            </td>
                            <td class="secondTD" colspan="2">{{$bein['nbr_piece']}} Pièce(s)</td>
                        </tr>
                        <tr>
                            <td class="firstTD" colspan="2">
                                <div class="p-2 flex-fill bd-highlight">
                                    <img src="\img\etage.png" width="10%"> Etage
                                </div>
                            </td>
                            <td class="secondTD" colspan="2">Numéro {{$bein['etage']}}</td>
                        </tr>
                        <tr>
                            <td class="firstTD" colspan="2">
                                <div class="p-2 flex-fill bd-highlight">
                                    <img src="\img\room.png"> Surface totale
                                </div>
                            </td>
                            <td class="secondTD" colspan="2">{{$bein['surface_totale']}} m²</td>
                        </tr>
                        <tr>
                            <td class="firstTD" colspan="2">
                                <div class="p-2 flex-fill bd-highlight">
                                    <img src="\img\room.png"> Surface soupente
                                </div>
                            </td>
                            <td class="secondTD" colspan="2">{{$bein['surface_soupente']}} m²</td>
                        </tr>
                        <tr>
                            <td class="firstTD" colspan="2">
                                <div class="p-2 flex-fill bd-highlight">
                                    <i class='Medium material-icons' >place</i>  Adresse
                                </div>
                            </td>
                            <td class="secondTD" colspan="2">{{$annonce['ville']}}</td>
                        </tr>
                    @endif
                </table>
                <br>
                <div class="col">
                    <h4 class="card-title">Description</h4>
                    <hr style="height: 2px;width-left:50%;background-color: darkturquoise;">
                    <p class="card-text">{{$annonce['description']}}</p>
                    <br>
                    <h4 class="card-title">Caractéristiques supplémentaires</h4>
                    <hr style="height: 2px;width-left:50%;background-color: darkturquoise;">
                    <div class="card-text" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            @foreach ($supp as $item)
                                <li class="list-group-item">{{$item}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div><br>
<!--
                <div class="col" >
                    <h4 class="card-title">Video du bien</h4>
                    <hr style="height: 2px;width-left:50%;background-color: darkturquoise;">
                    <div class="card video">
                        <div class="card-body">
                            <a class="video-popup" href="yout" title="Virtual Tour">
                                @if ($annonce['bein_type'] == "immoblier")
                                    <img src="" class="img-responsive wp-post-image" alt="visite virtuelle du bien ">
                                @endif
                                @if ($annonce['bein_type'] == "service")
                                    <img src="" class="" alt="visite virtuelle du bien">
                                @endif
                                @if ($annonce['bein_type'] == "terrain")
                                    <img src="" class="img-responsive wp-post-image" alt="visite virtuelle du bien">
                                @endif

                            </a>
                        </div>
                    </div>
                    <br>
                </div>
-->
                <div class=" d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ url()->previous() }}" class="btn btn-info me-md-2" type="button">Retour</a>
                </div>
                <br>
            </div>
            <!-- End video area  -->

            <!-- for youtube videos
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
          </div>
            -->


        </div>






@endsection
