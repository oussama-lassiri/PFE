<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
    </style>
</head>
<body>
  
 <!-- Background image -->
 <div
 id="Background_image"
 class="p-5 text-center bg-image">
        <div class="mask" style="background-color: rgba(68, 195, 245, 0.349);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                <h1 class="mb-3">Particulier à Particulier</h1>
                <h5 class="mb-4">Annonces particuliers pour vos biens particuliers</h5>
                <a class="btn btn-outline-light btn-lg m-2"
                    href=""
                    role="button"
                    rel="nofollow"
                    target="_blank">Creer l'annonce</a>
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
    <div class="row row-cols-3 row-cols-md-3 g-4">
        <div class="col">
          <div class="card ">
            <img src="im1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Type du Bien</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">A vendre|louer</li>
                <li class="list-group-item">Situé à </li>
                <li class="list-group-item">Prix   ...DH</li>
            </ul>
            <div class="card-body">
              <a href="#" class="btn btn-info  float-end">Plus d'infos ...</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="im2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Type du Bien</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">A vendre|louer</li>
                <li class="list-group-item">Situé à </li>
                <li class="list-group-item">Prix   ...DH</li>
            </ul>
            <div class="card-body">
              <a href="#" class="btn btn-info  float-end">Plus d'infos ...</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="im3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Type du Bien</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">A vendre|louer</li>
                <li class="list-group-item">Situé à </li>
                <li class="list-group-item">Prix   ...DH</li>
            </ul>
            <div class="card-body">
                <a href="#" class="btn btn-info  float-end">Plus d'infos ...</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="im1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Type du Bien</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">A  vendre | louer</li>
                <li class="list-group-item">Situé à </li>
                <li class="list-group-item">Prix   ...DH</li>
            </ul>
            <div class="card-body">
              <a href="#" class="btn btn-info  float-end ">Plus d'infos</a>
            </div>
          </div>
        </div>
      </div>

      <br>
      
      <br>
 <hr>

</body>
</html>