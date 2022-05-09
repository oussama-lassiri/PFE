@extends('nav')
@section('style')
    <title> testing image Desplay </title>
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
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"
    />
@endsection

@section('content')

    <div class="container">

        <div id="myCarousel" class="carousel" align = "center">
              @foreach ($img as $item)
                        <div class="carousel__slide"><a href="\uploads\{{$item}}" data-fancybox="gallery" data-caption="{{$item}}"> <img src="\uploads\{{$item}}" width="400" height="400"> </a></div>
              @endforeach
        </div>
        <div class="centered">
            <button href="#" class="lgbtn green" onclick="toggleText()">
                Informations sur le concessionnaire immobilier
            </button>
        </div>
        <div class="col info animate__animated animate__heartBeat" id="info" style="display: none;">
            <div class="card">
                <div class="card-body">
                    <!--info du concessionnaire immobilier-->
                    <div class="col-xs-4 col-md-6 -mb-4 dealer-face dealer-name dealer-info">
                        <img src="\img\client-face1.png" class="img-circle rounded-circle">
                        <h3 class="dealer-name">
                            <span>{{$user['name']}}</span>
                        </h3>
                    </div>
                    <span> <h5> Concessionnaire immobilier </h5></span>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="pe-7s-map-marker strong"> </i> //put address here </li>
                        <li class="list-group-item"><i class="fas fa-envelope"> </i> {{$user['email']}}</li>
                        <li class="list-group-item"><i class="fas fa-phone"> </i>{{$user['phone']}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-8">

            <table>
                <tr class="table-info">
                    <td class="titre_annonce"><span class="table-info">{{$annonce['titre']}}</span> </td>
                </tr>
                <tr class="table-info">
                    <td class="firstTD"><h4>À {{$trans}}</h4></td>
                    <td ><h2><span class="badge bg-info">Prix: {{$annonce['prix']}} DH</span></h2></td>
                </tr>
                @if ($annonce['bein_type'] == "immoblier")
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
                        <td ><img src="img\room.png">Surface totale </td>
                        <td >{{$bein['surface_totale']}} m²</td>
                    </tr>
                    @if (empty($bein['surface_habitable'])  && empty($bein['nbr_etage']) )
                        <tr>
                        <td class="firstTD">
                            <div class="p-2 flex-fill bd-highlight">
                                <img src="\img\etage.png" width="8%"> Etage
                            </div>
                        </td>
                        <td class="secondTD">Numéro {{$bein['etage']}} </td>
                        </tr>
                    @else
                        <tr>
                            <td class="firstTD">
                                <div class="p-2 flex-fill bd-highlight">
                                    <img src="\img\etage.png" width="8%"> Nombres d'étages
                                </div>
                            </td>
                            <td class="secondTD">{{$bein['nbr_etage']}} étage(s)</td>
                            <td class="firstTD"><img src="img\room.png">Surface habitable </td>
                            <td class="secondTD">{{$bein['surface_habitable']}} m²</td>
                        </tr>
                    @endif
                @endif
                @if ($annonce['bein_type'] == "terrain")
                    <tr>
                        <td class="firstTD">
                            <div class="p-2 flex-fill bd-highlight">
                                <span><img src="\img\zoning.png" alt="zone" width="10%">  Zoning</span>
                            </div>
                        </td>
                        <td class="secondTD">{{$bein['zonning']}}</td>
                    </tr>
                    <tr>
                        <td class="firstTD">
                            <div class="p-2 flex-fill bd-highlight">
                                <span><img src="\img\room.png"> Surface totale</span>
                            </div>
                        </td>
                        <td class="secondTD">{{$bein['surface_totale']}} m²</td>
                    </tr>
                    <tr>
                        <td class="firstTD">
                            <div class="p-2 flex-fill bd-highlight">
                                <span><i class='Medium material-icons' >place</i>  Ville </span>
                            </div>
                        </td>
                        <td class="secondTD">{{$annonce['ville']}}</td>
                    </tr>
                @endif
                @if ($annonce['bein_type'] == "service")
                    <tr>
                        <td class="firstTD">
                            <div class="p-2 flex-fill bd-highlight">
                                <img src="\img\piece.png" alt="zone" width="8%">  Nombre de pièces
                            </div>
                        </td>
                        <td class="secondTD" >{{$bein['nbr_piece']}} Pièce(s)</td>
                    </tr>
                    <tr>
                        <td class="firstTD">
                            <div class="p-2 flex-fill bd-highlight">
                                <img src="\img\etage.png" width="8%"> Etage
                            </div>
                        </td>
                        <td class="secondTD">Numéro {{$bein['etage']}}</td>
                    </tr>
                    <tr>
                        <td class="firstTD">
                            <div class="p-2 flex-fill bd-highlight">
                                <img src="\img\room.png"> Surface totale
                            </div>
                        </td>
                        <td class="secondTD">{{$bein['surface_totale']}} m²</td>
                    </tr>
                    <tr>
                        <td class="firstTD">
                            <div class="p-2 flex-fill bd-highlight">
                                <img src="\img\room.png"> Surface soupente
                            </div>
                        </td>
                        <td class="secondTD">{{$bein['surface_soupente']}} m²</td>
                    </tr>
                    <tr>
                        <td class="firstTD">
                            <div class="p-2 flex-fill bd-highlight">
                                <i class='Medium material-icons' >place</i>  Adresse
                            </div>
                        </td>
                        <td class="secondTD">{{$annonce['ville']}}</td>
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
        </div>
        <!-- End video area  -->

        <!-- for youtube videos
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
      </div>
        -->
    </div>
    </div>


    <script>
        function toggleText(){
            var x = document.getElementById("info");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }

            $("#info").hide();
            $("#info").show();
        }
    </script>


@endsection
