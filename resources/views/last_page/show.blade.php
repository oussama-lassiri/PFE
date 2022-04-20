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

<div id="myCarousel" class="carousel" align = "center">
    @foreach ($annonce as $item)
        <div class="carousel__slide"><a href="\uploads\{{$item}}" data-fancybox="gallery" data-caption="{{$item}}"> <img src="\uploads\{{$annonce[0]}}" width="400" height="400"> </a></div>
    @endforeach
</div>

<div class="centered"> <a href="#" class="lgbtn green">Informations sur venduer</a> </div>
<div class="col info">
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

<div class="col-8 container">
    
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
        <span><i class='Medium material-icons' >hotel</i>   1</span>
      </div>
      <div class="p-2 flex-fill bd-highlight">
        <span><i class='Medium material-icons' >weekend </i>  1</span>
      </div>
      <div class="p-2 flex-fill bd-highlight">
        <span>  <i class="Medium material-icons ">bathtub</i>   1</span>
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
        <span><img src="\img\room.png">    75 m²</span>
      </div>
      <div class="p-2 flex-fill bd-highlight">
        <span><i class='Medium material-icons' >roofing</i>    5 ans</span>
      </div>
      <div class="p-2 flex-fill bd-highlight">
        <span><i class='Medium material-icons' >place</i>   Agadir</span>
      </div>
    </div>

    <div class="col">
        <h4 class="card-title">Description</h4>
        <hr style="height: 2px;width-left:50%;background-color: darkturquoise;">
        <p class="card-text">Nulla quis dapibus nisl. Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies commodo arcu nec pretium. Nullam sed arcu ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies                                </p>
        <br>
        <h4 class="card-title">Caractéristiques supplémentaires</h4>
        <hr style="height: 2px;width-left:50%;background-color: darkturquoise;">
        <p class="card-text">climatisé / meublé / sécurisée /jardin </p>
    </div>

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

<script>
  function toggleText(id){
    var x = document.getElementById("");
    if(id === 1){
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    y.style.display = "none";
    z.style.display = "none";
    $("#Immeuble_btn").hide(); 
    $("#Immeuble_btn").show();
    }
  }
</script>


@endsection
