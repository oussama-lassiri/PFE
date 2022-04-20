@extends('nav')

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css\annonce_page_style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="\css\style.css">
    <title>Annonce</title>
@endsection
    
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-8">

                <div class="slideshow-container">

                    <div class="mySlides fade">
                      <div class="numbertext">Location</div>
                      <img src="img\property1.jpg" style="width: 600px;" >
                      <div class="text">Caption Text</div>
                    </div>
                    
                    <div class="mySlides fade">
                      <div class="numbertext">Location</div>
                      <img src="img\property2.jpg" style="width: 600px; ">
                      <div class="text">Caption Two</div>
                    </div>
                    
                    <div class="mySlides fade">
                      <div class="numbertext">Location</div>
                      <img src="img\property3.jpg" style="width: 600px; ">
                      <div class="text">Caption Three</div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">Location</div>
                        <img src="img\property4.jpg" style="width: 600px; " >
                        <div class="text">Caption Three</div>
                    </div>
                    
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>
                    
                </div>
                
                    
                <div style="text-align:center">
                      <span class="dot" onclick="currentSlide(1)"></span> 
                      <span class="dot" onclick="currentSlide(2)"></span> 
                      <span class="dot" onclick="currentSlide(3)"></span> 
                      <span class="dot" onclick="currentSlide(4)"></span>    
                </div>
                <br>
                
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
                    <span><img src="img\room.png">    75 m²</span>
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
                    <div class="card">
                        <div class="card-body">
                          <a class="video-popup" href="yout" title="Virtual Tour">
                            <img src="img\property-video.jpg" class="img-responsive wp-post-image" alt="visite virtuelle">            
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

            <div class="col">
              <div class="card fixed-top">
                <div class="card-body">
                  <!--info du concessionnaire immobilier-->
                <div class="col-xs-4 col-md-6 -mb-4 dealer-face dealer-name dealer-info">
                    <a href="">
                        <img src="img/client-face1.png" class="img-circle rounded-circle">
                        Nathan
                    </a>
                </div>
                <h3 class="dealer-name">
                    <span>Concessionnaire immobilier</span>        
                </h3>
                <ul>                                       
                    <li><i class="pe-7s-map-marker strong"> </i> 80100 Agadir, your adress her</li>
                    <li><i class="pe-7s-mail strong"> </i> email@youremail.com</li>
                    <li><i class="pe-7s-call strong"> </i> +226 908 967 59</li>
                </ul>
                </div>
               
              </div>
            </div>
        </div>
    
            <div class="col-md-auto">
                <div class="clear">
                <div class="col-xs-8 col-sm-8 ">
                    
                    <div class="dealer-social-media">
                        <a class="twitter" target="_blank" href="">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="facebook" target="_blank" href="">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="gplus" target="_blank" href="">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a class="linkedin" target="_blank" href="">
                            <i class="fa fa-linkedin"></i>
                        </a> 
                        <a class="instagram" target="_blank" href="">
                            <i class="fa fa-instagram"></i>
                        </a>       
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>



            </div>
    </div>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
    </script>
@endsection