@extends('admin_dir.theme')

@section('style admin')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="\css\style.css">
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
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"
    />
    <style>
        .prix_trans{
            background: #632c65;
            background: -moz-linear-gradient(-45deg, #fca6ff 15%, #56a5e2 100%);
            background: -webkit-linear-gradient(-45deg, #fca3ff 15%,#56a5e2 100%);
            background: linear-gradient(135deg, #fdb8ff 15%,#56a5e2 100%);
        }
        .container{
            margin-top: 6%;
        }
    </style>
@endsection

@section('page', 'Espace annonce ')

@section('right content')

    <div class="row">

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

            <div class="col-8">
                <span class="titre_annonce">{{$annonce['titre']}}</span>
                <table>
                    <tr class="table-info prix_trans">
                        <td class="firstTD" colspan="2"><h3>À {{ $trans }}</h3></td>
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
                                        <img src="\img\etage.png" width="20%"> Etage
                                    </div>
                                </td>
                                <td class="secondTD">Numéro {{$bein['etage']}} </td>
                            </tr>
                        @else
                            <tr>
                                <td class="firstTD">
                                    <div class="p-2 flex-fill bd-highlight">
                                        <img src="\img\etage.png" width="20%"> Nombres d'étages
                                    </div>
                                </td>
                                <td class="secondTD">{{$bein['nbr_etage']}} étage(s)</td>
                                <td class="firstTD"><img src="\img\room.png">Surface habitable </td>
                                <td class="secondTD">{{$bein['surface_habitable']}} m²</td>
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

                <div class="col" >
                    <h4 class="card-title">Video du bien</h4>
                    <hr style="height: 2px;width-left:50%;background-color: darkturquoise;">
                    <div class="card video">
                        <div class="card-body">
                            <a class="video-popup" href="yout" title="Virtual Tour">
                                @if ($annonce['bein_type'] == "immoblier")
                                    <img src="\img\property-video.jpg" class="img-responsive wp-post-image" alt="visite virtuelle">
                                @endif
                                @if ($annonce['bein_type'] == "service")
                                    <img src="\img\service-video.jpg" class="img-responsive wp-post-image" alt="visite virtuelle">
                                @endif
                                @if ($annonce['bein_type'] == "terrain")
                                    <img src="\img\terrain-video.jpg" class="img-responsive wp-post-image" alt="visite virtuelle">
                                @endif

                            </a>
                        </div>
                    </div>
                    <br>
                </div>

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
