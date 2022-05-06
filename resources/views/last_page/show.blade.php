@extends('nav')
@section('style')
    <title> testing image Desplay </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

  <div class="centered"> <button href="#" class="lgbtn green" onclick="toggleText()">Informations sur venduer</button> </div>
  <div class="col info animate__animated animate__heartBeat" id="info" style="display: none;">
      <div class="card">
          <div class="card-body">
              <!--info du concessionnaire immobilier-->
          <div class="col-xs-4 col-md-6 -mb-4 dealer-face dealer-name dealer-info">
                  <img src="\img\client-face1.png" class="img-circle rounded-circle">
                  <h3 class="dealer-name">
                      <span>Kamal</span>        
                  </h3>
          </div>
          <span>Concessionnaire immobilier</span>        
          <ul>                                       
              <li><i class="pe-7s-map-marker strong"> </i> 80100 Agadir, your adress her</li>
              <li><i class="pe-7s-mail strong"> </i> email@youremail.com</li>
              <li><i class="pe-7s-call strong"> </i> +226 908 967 59</li>
          </ul>
          </div>
      </div>
  </div>

@if ($annonce['bein_type'] == "immoblier")
    <div class="col-8">
    <div class="d-flex bd-highlight">
          <div class="p-2 flex-fill bd-highlight">
            <span>Chambre</span>
          </div>
          <div class="p-2 flex-fill bd-highlight">
            <span>Salon</span>
          </div>
          <div class="p-2 flex-fill bd-highlight">
            <span>Salle de bain</span>
          </div>
    </div>

    <div class="d-flex bd-highlight">
      <div class="p-2 flex-fill bd-highlight">
        <span><i class='Medium material-icons' >hotel</i>   {{$bein['chambre']}}</span>
      </div>
      <div class="p-2 flex-fill bd-highlight">
        <span><i class='Medium material-icons' >weekend </i>  {{$bein['salon']}}</span>
      </div>
      <div class="p-2 flex-fill bd-highlight">
        <span>  <i class="Medium material-icons ">bathtub</i>   {{$bein['salle_de_bain']}}</span>
      </div>
    </div>

    <div class="d-flex bd-highlight">
      <div class="p-2 flex-fill bd-highlight">
        <span>Surface totale</span>
      </div>
      <div class="p-2 flex-fill bd-highlight">
        <span>Age de bien</span>
      </div>
      <div class="p-2 flex-fill bd-highlight">
        <span>ville</span>
      </div>
    </div>
    
    <div class="d-flex bd-highlight">
      <div class="p-2 flex-fill bd-highlight">
        <span><img src="\img\room.png">    {{$bein['surface_totale']}}</span>
      </div>
      <div class="p-2 flex-fill bd-highlight">
        <span><i class='Medium material-icons' >roofing</i>    {{$bein['age_de_bien']}}</span>
      </div>
      <div class="p-2 flex-fill bd-highlight">
        <span><i class='Medium material-icons' >place</i>   {{$annonce['ville']}}</span>
      </div>
    </div><br>
@endif
@if ($annonce['bein_type'] == "terrain")
<div class="d-flex bd-highlight">
  <div class="p-2 flex-fill bd-highlight">
    <span>Zonning</span>
  </div>
  <div class="p-2 flex-fill bd-highlight">
    <span>Surface totale </span>
  </div>
  <div class="p-2 flex-fill bd-highlight">
    <span>ville</span>
  </div>
</div>

<div class="d-flex bd-highlight">
 
  <div class="p-2 flex-fill bd-highlight">
    <span> <img src="https://img.icons8.com/external-itim2101-lineal-itim2101/64/000000/external-real-estate-calculate-itim2101-lineal-itim2101.png" width="30x30"/>  {{$bein['zonning']}}</span>
  </div>
  <div class="p-2 flex-fill bd-highlight">
    <span><img src="\img\room.png">    {{$bein['surface_totale']}}</span>
  </div>
  <div class="p-2 flex-fill bd-highlight">
    <span><i class='Medium material-icons' >place</i>   {{$annonce['ville']}}</span>
  </div>
</div><br>
@endif

@if ($annonce['bein_type'] == "service")
<div class="d-flex bd-highlight">
  <div class="p-2 flex-fill bd-highlight">
    <span>Nombre de pièces</span>
  </div>
  <div class="p-2 flex-fill bd-highlight">
    <span>Etage </span>
  </div>
  <div class="p-2 flex-fill bd-highlight">
    <span>Surface totale</span>
  </div>
  <div class="p-2 flex-fill bd-highlight">
    <span>Surface soupente</span>
  </div>
  <div class="p-2 flex-fill bd-highlight">
    <span>ville</span>
  </div>
</div>

<div class="d-flex bd-highlight">
  <div class="p-2 flex-fill bd-highlight">
    <span><img src="https://img.icons8.com/wired/64/000000/door-opened.png" width="30x30"/>    {{$bein['nbr_piece']}}</span>
  </div>
  <div class="p-2 flex-fill bd-highlight">
    <span> <img src="https://img.icons8.com/cotton/64/000000/stairs.png" width="30x30"/>  {{$bein['etage']}}</span>
  </div>
  <div class="p-2 flex-fill bd-highlight">
    <span><img src="\img\room.png">    {{$bein['surface_totale']}}</span>
  </div>
  <div class="p-2 flex-fill bd-highlight">
    <span><img src="\img\room.png">    {{$bein['surface_soupente']}}</span>
  </div>
  <div class="p-2 flex-fill bd-highlight">
    <span><i class='Medium material-icons' >place</i>   {{$annonce['ville']}}</span>
  </div>
</div><br>
@endif
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
                    <img src="\img\property-video.jpg" class="img-responsive wp-post-image" alt="visite virtuelle">            
                </a>
            </div>
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
