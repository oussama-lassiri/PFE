@extends('nav')
@section('style')
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
   @yield('foot')
@section('content')
     <!-- Footer -->
<footer class="text-center text-lg-start bg-info text-white ">
    <!-- Section: Social media -->
    <section
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Connectez-vous avec nous sur les réseaux sociaux:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>particulier à particulier
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Biens
            </h6>
            <p>
              <a href="#!" class="text-reset">Habitable</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Service</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Immobilier</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Liens utiles 
            </h6>
            <p>
              <a href="#!" class="text-reset">accueil</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Se connecter</a>
            </p>
            <p>
              <a href="#!" class="text-reset">S'inscrire</a>
            </p>
            <p>
                <a href="#!" class="text-reset">Recherche</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Aide</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact
            </h6>
            <p><i class="fas fa-home me-3"></i> Agadir, Agadir 80100, MAROC</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              particulier@pap.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="">Particulier.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
@endsection