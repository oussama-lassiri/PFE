@extends('nav')

@section('style')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/user/style.css">
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
    <style>
        
@import url(https://fonts.googleapis.com/css?family=Roboto:400,100,900);

a[data-toggle="modal"] {
  margin: 5px;
}
.title {
  color: #757575;
  font-weight: bold;
}
.modal {
  text-align: left;
}
.modal-content {
  border: none;
  border-radius: 2px;
      box-shadow: 0 16px 28px 0 rgba(0,0,0,0.22),0 25px 55px 0 rgba(0,0,0,0.21);
}
.modal-header{
  border-bottom: 0;
  padding-top: 15px;
  padding-right: 26px;
  padding-left: 26px;
  padding-bottom: 0px;
}
.modal-title {
  font-size: 34px;
}
.modal-body{
  border-bottom: 0;
  padding-top: 5px;
  padding-right: 26px;
  padding-left: 26px;
  padding-bottom: 10px;
  font-size: 15px;
}
.modal-footer {
  border-top:0;
  padding-top: 0px;
  padding-right:26px;
  padding-bottom:26px;
  padding-left:26px;
}
.btn-default,.btn-primary {
    border: none;
    border-radius: 2px;
    display: inline-block;
    color: #424242;
    background-color: #FFF;
    text-align: center;
    height: 36px;
    line-height: 36px;
    outline: 0;
    padding: 0 2rem; 
    vertical-align: middle;
    -webkit-tap-highlight-color: transparent;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
    letter-spacing: .5px;
    transition: .2s ease-out;
}
.btn-default:hover{
  background-color: #FFF;
  box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);
}
.btn-primary {
  color: #FFF;
  background-color: #2980B9;
}
.btn-primary:hover{
  background-color: #2980B9;
  box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);
}



/* Please ❤ this if you like it! */


@import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=devanagari,latin-ext');


:root {
	--white: #ffffff;
	--light: #f0eff3;
	--black: #000000;
	--dark-blue: #1f2029;
	--dark-light: #353746;
	--red: #da2c4d;
	--yellow: #f8ab37;
	--grey: #ecedf3;
}

/* #Primary
================================================== */

body{
	width: 100%;
	background: var(--dark-blue);
	overflow-x: hidden;
    font-family: 'Poppins', sans-serif;
	font-size: 17px;
	line-height: 30px;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
p{
    font-family: 'Poppins', sans-serif;
	font-size: 17px;
	line-height: 30px;
	color: var(--white);
	letter-spacing: 1px;
	font-weight: 500;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
::selection {
	color: var(--white);
	background-color: var(--black);
}
::-moz-selection {
	color: var(--white);
	background-color: var(--black);
}
mark{
	color: var(--white);
	background-color: var(--black);
}
.section {
    position: relative;
	width: 100%;
	display: block;
	text-align: center;
	margin: 0 auto;
}
.over-hide {
    overflow: hidden;
}
.z-bigger {
    z-index: 100 !important;
}


.background-color{
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: var(--dark-blue);
	z-index: 1;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.checkbox:checked ~ .background-color{
	background-color: var(--white);
}


[type="checkbox"]:checked,
[type="checkbox"]:not(:checked),
[type="radio"]:checked,
[type="radio"]:not(:checked){
	position: absolute;
	left: -9999px;
	width: 0;
	height: 0;
	visibility: hidden;
}
.checkbox:checked + label,
.checkbox:not(:checked) + label{
	position: relative;
	width: 70px;
	display: inline-block;
	padding: 0;
	margin: 0 auto;
	text-align: center;
	margin: 17px 0;
	margin-top: 100px;
	height: 6px;
	border-radius: 4px;
	background-image: linear-gradient(298deg, var(--red), var(--yellow));
	z-index: 100 !important;
}
.checkbox:checked + label:before,
.checkbox:not(:checked) + label:before {
	position: absolute;
	font-family: 'unicons';
	cursor: pointer;
	top: -17px;
	z-index: 2;
	font-size: 20px;
	line-height: 40px;
	text-align: center;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.checkbox:not(:checked) + label:before {
	content: '\eac1';
	left: 0;
	color: var(--grey);
	background-color: var(--dark-light);
	box-shadow: 0 4px 4px rgba(0,0,0,0.15), 0 0 0 1px rgba(26,53,71,0.07);
}
.checkbox:checked + label:before {
	content: '\eb8f';
	left: 30px;
	color: var(--yellow);
	background-color: var(--dark-blue);
	box-shadow: 0 4px 4px rgba(26,53,71,0.25), 0 0 0 1px rgba(26,53,71,0.07);
}

.checkbox:checked ~ .section .container .row .col-12 p{
	color: var(--dark-blue);
}


.checkbox-tools:checked + label,
.checkbox-tools:not(:checked) + label{
	position: relative;
	display: inline-block;
	padding: 20px;
	width: 110px;
	font-size: 14px;
	line-height: 20px;
	letter-spacing: 1px;
	margin: 0 auto;
	margin-left: 5px;
	margin-right: 5px;
	margin-bottom: 10px;
	text-align: center;
	border-radius: 4px;
	overflow: hidden;
	cursor: pointer;
	text-transform: uppercase;
	color: var(--white);
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.checkbox-tools:not(:checked) + label{
	background-color: var(--dark-light);
	box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
}
.checkbox-tools:checked + label{
	background-color: transparent;
	box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}
.checkbox-tools:not(:checked) + label:hover{
	box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}
.checkbox-tools:checked + label::before,
.checkbox-tools:not(:checked) + label::before{
	position: absolute;
	content: '';
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	border-radius: 4px;
	background-image: linear-gradient(298deg, var(--red), var(--yellow));
	z-index: -1;
}
.checkbox-tools:checked + label .uil,
.checkbox-tools:not(:checked) + label .uil{
	font-size: 24px;
	line-height: 24px;
	display: block;
	padding-bottom: 10px;
}

.checkbox:checked ~ .section .container .row .col-12 .checkbox-tools:not(:checked) + label{
	background-color: var(--light);
	color: var(--dark-blue);
	box-shadow: 0 1x 4px 0 rgba(0, 0, 0, 0.05);
}

.checkbox-budget:checked + label,
.checkbox-budget:not(:checked) + label{
	position: relative;
	display: inline-block;
	padding: 0;
	padding-top: 20px;
	padding-bottom: 20px;
	width: 260px;
	font-size: 52px;
	line-height: 52px;
	font-weight: 700;
	letter-spacing: 1px;
	margin: 0 auto;
	margin-left: 5px;
	margin-right: 5px;
	margin-bottom: 10px;
	text-align: center;
	border-radius: 4px;
	overflow: hidden;
	cursor: pointer;
	text-transform: uppercase;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
	-webkit-text-stroke: 1px var(--white);
    text-stroke: 1px var(--white);
    -webkit-text-fill-color: transparent;
    text-fill-color: transparent;
    color: transparent;
}
.checkbox-budget:not(:checked) + label{
	background-color: var(--dark-light);
	box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
}
.checkbox-budget:checked + label{
	background-color: transparent;
	box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}
.checkbox-budget:not(:checked) + label:hover{
	box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}
.checkbox-budget:checked + label::before,
.checkbox-budget:not(:checked) + label::before{
	position: absolute;
	content: '';
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	border-radius: 4px;
	background-image: linear-gradient(138deg, var(--red), var(--yellow));
	z-index: -1;
}
.checkbox-budget:checked + label span,
.checkbox-budget:not(:checked) + label span{
	position: relative;
	display: block;
}
.checkbox-budget:checked + label span::before,
.checkbox-budget:not(:checked) + label span::before{
	position: absolute;
	content: attr(data-hover);
	top: 0;
	left: 0;
	width: 100%;
	overflow: hidden;
	-webkit-text-stroke: transparent;
    text-stroke: transparent;
    -webkit-text-fill-color: var(--white);
    text-fill-color: var(--white);
    color: var(--white);
	-webkit-transition: max-height 0.3s;
	-moz-transition: max-height 0.3s;
	transition: max-height 0.3s;
}
.checkbox-budget:not(:checked) + label span::before{
	max-height: 0;
}
.checkbox-budget:checked + label span::before{
	max-height: 100%;
}

.checkbox:checked ~ .section .container .row .col-xl-10 .checkbox-budget:not(:checked) + label{
	background-color: var(--light);
	-webkit-text-stroke: 1px var(--dark-blue);
    text-stroke: 1px var(--dark-blue);
	box-shadow: 0 1x 4px 0 rgba(0, 0, 0, 0.05);
}

.checkbox-booking:checked + label,
.checkbox-booking:not(:checked) + label{
	position: relative;
	display: -webkit-inline-flex;
	display: -ms-inline-flexbox;
	display: inline-flex;
	-webkit-align-items: center;
	-moz-align-items: center;
	-ms-align-items: center;
	align-items: center;
	-webkit-justify-content: center;
	-moz-justify-content: center;
	-ms-justify-content: center;
	justify-content: center;
	-ms-flex-pack: center;
	text-align: center;
	padding: 0;
	padding: 6px 25px;
	font-size: 14px;
	line-height: 30px;
	letter-spacing: 1px;
	margin: 0 auto;
	margin-left: 6px;
	margin-right: 6px;
	margin-bottom: 16px;
	text-align: center;
	border-radius: 4px;
	cursor: pointer;
    color: var(--white);
	text-transform: uppercase;
	background-color: var(--dark-light);
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.checkbox-booking:not(:checked) + label::before{
	box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
}
.checkbox-booking:checked + label::before{
	box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}
.checkbox-booking:not(:checked) + label:hover::before{
	box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}
.checkbox-booking:checked + label::before,
.checkbox-booking:not(:checked) + label::before{
	position: absolute;
	content: '';
	top: -2px;
	left: -2px;
	width: calc(100% + 4px);
	height: calc(100% + 4px);
	border-radius: 4px;
	z-index: -2;
	background-image: linear-gradient(138deg, var(--red), var(--yellow));
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.checkbox-booking:not(:checked) + label::before{
	top: -1px;
	left: -1px;
	width: calc(100% + 2px);
	height: calc(100% + 2px);
}
.checkbox-booking:checked + label::after,
.checkbox-booking:not(:checked) + label::after{
	position: absolute;
	content: '';
	top: -2px;
	left: -2px;
	width: calc(100% + 4px);
	height: calc(100% + 4px);
	border-radius: 4px;
	z-index: -2;
	background-color: var(--dark-light);
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.checkbox-booking:checked + label::after{
	opacity: 0;
}
.checkbox-booking:checked + label .uil,
.checkbox-booking:not(:checked) + label .uil{
	font-size: 20px;
}
.checkbox-booking:checked + label .text,
.checkbox-booking:not(:checked) + label .text{
	position: relative;
	display: inline-block;
	-webkit-transition: opacity 300ms linear;
	transition: opacity 300ms linear;
}
.checkbox-booking:checked + label .text{
	opacity: 0.6;
}
.checkbox-booking:checked + label .text::after,
.checkbox-booking:not(:checked) + label .text::after{
	position: absolute;
	content: '';
	width: 0;
	left: 0;
	top: 50%;
	margin-top: -1px;
	height: 2px;
	background-image: linear-gradient(138deg, var(--red), var(--yellow));
	z-index: 1;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.checkbox-booking:not(:checked) + label .text::after{
	width: 0;
}
.checkbox-booking:checked + label .text::after{
	width: 100%;
}

.checkbox:checked ~ .section .container .row .col-12 .checkbox-booking:not(:checked) + label,
.checkbox:checked ~ .section .container .row .col-12 .checkbox-booking:checked + label{
	background-color: var(--light);
    color: var(--dark-blue);
}
.checkbox:checked ~ .section .container .row .col-12 .checkbox-booking:checked + label::after,
.checkbox:checked ~ .section .container .row .col-12 .checkbox-booking:not(:checked) + label::after{
	background-color: var(--light);
}




.link-to-page {
	position: fixed;
    top: 30px;
    right: 30px;
    z-index: 20000;
    cursor: pointer;
    width: 50px;
}
.link-to-page img{
	width: 100%;
	height: auto;
	display: block;
}
    </style>
@endsection
@section('content')
<div class="profile-page">
    
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('http://wallpapere.org/wp-content/uploads/2012/02/black-and-white-city-night.png');"></div>
    <div class="main main-raised">
		<div class="profile-content">
            <div class="container">
                <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile">
                                <div class="avatar">
                                    <img src="https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTU0NjQzOTk4OTQ4OTkyMzQy/ansel-elgort-poses-for-a-portrait-during-the-baby-driver-premiere-2017-sxsw-conference-and-festivals-on-march-11-2017-in-austin-texas-photo-by-matt-winkelmeyer_getty-imagesfor-sxsw-square.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                                </div>
                                <div class="name">
                                    <h3 class="title">{{ $user['name']}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="description text-center">
                    <div class="tab-pane show " id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>CIN</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $user['cin'] }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Age</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $user['age']}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $user['email']}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Telephone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $user['phone']}}</p>
                                            </div>
                                        </div>
                            </div>
                </div>
				<div class="row">
					<div class="col-md-6 ml-auto mr-auto">
                        <div class="profile-tabs">
                          <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                                  <i class="fas fa-file-alt"></i>
                                  Annonce
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                                <i class="fas fa-user-edit"></i>
                                Compte
                                </a>
                            </li>   
                          </ul>
                        </div>
                    </div>
                </div>
        
          <div class="tab-content tab-space">
            <div class="tab-pane active text-center gallery" id="studio">
  				<div class="row">
                    <div class="row row-cols-3 row-cols-md-3 g-4">
                        @foreach ($annonce as $item)
                            <div class="col">
                                <div class="card ">
        
                                        <img src="\uploads\{{$item['images_path']}}" class="card-img-top" alt="...">
                                        
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item['bein_type'] }}</h5>
                                        <p class="card-text">{{ $item['titre'] }}.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">{{ $item['transaction'] }}</li>
                                        <li class="list-group-item">{{ $item['ville'] }}</li>
                                        <li class="list-group-item">Prix:   {{ $item['prix'] }}DH</li>
                                        <li class="list-group-item">Etat:   {{ $item['etat'] }}</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="btn btn-success  float-end">Modifie</a>
                                        <a href="#" class="btn btn-danger  float-start">Supprimer</a>
                                        <a href="#" class="btn btn-info ">@if ($item['etat'] == "active")
                                            {{ "desactiver" }}
                                            @else
                                            {{ "Activer" }}
                                        @endif </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                     </div>
  				</div>
  			</div>
              
            <div class="tab-pane text-center gallery" id="works">
            <h5>Etat de compte:</h5>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span>
                            <em></em>
                            <strong></strong>
                        </span>
                    </label>
                    <div class="container modifie">
                    <h5 style="position:absolute;right:45%;">Modfie les informations personnelle:</h5>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="info-item">
                            <label class="icon" for="name"><i class="fas fa-user"></i></label>
                            <input type="text" name="name" id="name" value="{{ $user['name']}}" placeholder="Nom" required autocomplete="name" autofocus/>
                        </div>

                        <div class="info-item">
                            <label class="icon" for="cin"><i class="fas fa-id-badge "></i></label>
                            <input type="text"  name="cin" id="cin" value="{{ $user['cin']}}" placeholder="CIN" required autocomplete="cin"/>
                        </div>

                        <div  class="info-item">
                            <label class="icon" for="age"><i class="fas fa-calendar"></i></i></label>
                            <input type="number" name="age" id="age" value="{{ $user['age']}}" placeholder="Age" required autocomplete="age"/>
                        </div>

                        <div  class="info-item">
                            <label class="icon" for="email"><i class="fas fa-envelope"></i></label>
                            <input type="text" class="" name="email" id="email" value="{{ $user['email']}}" placeholder="Email" required autocomplete="email"/>
                        </div>

                        <div  class="info-item">
                            <label class="icon" for="phone"><i class="fas fa-phone"></i></label>
                            <input type="phone" name="phone" id="phone" value="{{ $user['phone']}}" placeholder="Telephone" required autocomplete="phone"/>
                        </div>

                        <div  class="info-item">
                            <label class="icon" for="password"><i class="fas fa-unlock-alt"></i></label>
                            <input type="password" name="password" id="password" class="" value="{{ $user['password']}}" placeholder="Mot de passe" required autocomplete="new-password"/>
                        </div>
                        <button type="submit" class="sbt">Enregistre</button>
                    </form>
                </div>
  			</div>
          </div>


          <div class="section over-hide z-bigger">
            <div class="section over-hide z-bigger">
                <div class="container pb-5">
                    <div class="row justify-content-center pb-5">
                        <div class="col-12 pt-5">
                            <p class="mb-4 pb-2">Design Tools</p>
                        </div>
                        <div class="col-12 pb-5">
                            <input class="checkbox-tools" type="radio" name="tools" id="tool-1" checked>
                            <label class="for-checkbox-tools" for="tool-1">
                                <i class='uil uil-line-alt'></i>
                                line
                            </label><!--
                            --><input class="checkbox-tools" type="radio" name="tools" id="tool-2">
                            <label class="for-checkbox-tools" for="tool-2">
                                <i class='uil uil-vector-square'></i>
                                square
                            </label><!--
                            --><input class="checkbox-tools" type="radio" name="tools" id="tool-3">
                            <label class="for-checkbox-tools" for="tool-3">
                                <i class='uil uil-ruler'></i>
                                ruler
                            </label><!--
                            --><input class="checkbox-tools" type="radio" name="tools" id="tool-4">
                            <label class="for-checkbox-tools" for="tool-4">
                                <i class='uil uil-crop-alt'></i>
                                crop
                            </label><!--
                            --><input class="checkbox-tools" type="radio" name="tools" id="tool-5">
                            <label class="for-checkbox-tools" for="tool-5">
                                <i class='uil uil-brush-alt'></i>
                                brush
                            </label><!--
                            --><input class="checkbox-tools" type="radio" name="tools" id="tool-6">
                            <label class="for-checkbox-tools" for="tool-6">
                                <i class='uil uil-image-resize-landscape'></i>
                                resize
                            </label>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
            
        <!-- Link to page
        ================================================== -->
    
        <a href="https://front.codes" class="link-to-page" target="_blank"><img src="https://assets.codepen.io/1462889/fcy.png" alt=""></a>
        
            </div>
        </div>
	</div>
  
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>
    var big_image;

        $(document).ready(function() {
        BrowserDetect.init();

        // Init Material scripts for buttons ripples, inputs animations etc, more info on the next link https://github.com/FezVrasta/bootstrap-material-design#materialjs
        $('body').bootstrapMaterialDesign();

        window_width = $(window).width();

        $navbar = $('.navbar[color-on-scroll]');
        scroll_distance = $navbar.attr('color-on-scroll') || 500;

        $navbar_collapse = $('.navbar').find('.navbar-collapse');

        //  Activate the Tooltips
        $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();

        // Activate Popovers
        $('[data-toggle="popover"]').popover();

        if ($('.navbar-color-on-scroll').length != 0) {
            $(window).on('scroll', materialKit.checkScrollForTransparentNavbar);
        }

        materialKit.checkScrollForTransparentNavbar();

        if (window_width >= 768) {
            big_image = $('.page-header[data-parallax="true"]');
            if (big_image.length != 0) {
            $(window).on('scroll', materialKit.checkScrollForParallax);
            }

        }


        });

        $(document).on('click', '.navbar-toggler', function() {
        $toggle = $(this);

        if (materialKit.misc.navbar_menu_visible == 1) {
            $('html').removeClass('nav-open');
            materialKit.misc.navbar_menu_visible = 0;
            $('#bodyClick').remove();
            setTimeout(function() {
            $toggle.removeClass('toggled');
            }, 550);

            $('html').removeClass('nav-open-absolute');
        } else {
            setTimeout(function() {
            $toggle.addClass('toggled');
            }, 580);


            div = '<div id="bodyClick"></div>';
            $(div).appendTo("body").click(function() {
            $('html').removeClass('nav-open');

            if ($('nav').hasClass('navbar-absolute')) {
                $('html').removeClass('nav-open-absolute');
            }
            materialKit.misc.navbar_menu_visible = 0;
            $('#bodyClick').remove();
            setTimeout(function() {
                $toggle.removeClass('toggled');
            }, 550);
            });

            if ($('nav').hasClass('navbar-absolute')) {
            $('html').addClass('nav-open-absolute');
            }

            $('html').addClass('nav-open');
            materialKit.misc.navbar_menu_visible = 1;
        }
        });

        materialKit = {
        misc: {
            navbar_menu_visible: 0,
            window_width: 0,
            transparent: true,
            fixedTop: false,
            navbar_initialized: false,
            isWindow: document.documentMode || /Edge/.test(navigator.userAgent)
        },

        initFormExtendedDatetimepickers: function() {
            $('.datetimepicker').datetimepicker({
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            }
            });
        },

        initSliders: function() {
            // Sliders for demo purpose
            var slider = document.getElementById('sliderRegular');

            noUiSlider.create(slider, {
            start: 40,
            connect: [true, false],
            range: {
                min: 0,
                max: 100
            }
            });

            var slider2 = document.getElementById('sliderDouble');

            noUiSlider.create(slider2, {
            start: [20, 60],
            connect: true,
            range: {
                min: 0,
                max: 100
            }
            });
        },

        checkScrollForParallax: function() {
            oVal = ($(window).scrollTop() / 3);
            big_image.css({
            'transform': 'translate3d(0,' + oVal + 'px,0)',
            '-webkit-transform': 'translate3d(0,' + oVal + 'px,0)',
            '-ms-transform': 'translate3d(0,' + oVal + 'px,0)',
            '-o-transform': 'translate3d(0,' + oVal + 'px,0)'
            });
        },

        checkScrollForTransparentNavbar: debounce(function() {
            if ($(document).scrollTop() > scroll_distance) {
            if (materialKit.misc.transparent) {
                materialKit.misc.transparent = false;
                $('.navbar-color-on-scroll').removeClass('navbar-transparent');
            }
            } else {
            if (!materialKit.misc.transparent) {
                materialKit.misc.transparent = true;
                $('.navbar-color-on-scroll').addClass('navbar-transparent');
            }
            }
        }, 17)
        };

        // Returns a function, that, as long as it continues to be invoked, will not
        // be triggered. The function will be called after it stops being called for
        // N milliseconds. If `immediate` is passed, trigger the function on the
        // leading edge, instead of the trailing.

        function debounce(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this,
            args = arguments;
            clearTimeout(timeout);
            timeout = setTimeout(function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
            }, wait);
            if (immediate && !timeout) func.apply(context, args);
        };
        };

        var BrowserDetect = {
        init: function() {
            this.browser = this.searchString(this.dataBrowser) || "Other";
            this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "Unknown";
        },
        searchString: function(data) {
            for (var i = 0; i < data.length; i++) {
            var dataString = data[i].string;
            this.versionSearchString = data[i].subString;

            if (dataString.indexOf(data[i].subString) !== -1) {
                return data[i].identity;
            }
            }
        },
        searchVersion: function(dataString) {
            var index = dataString.indexOf(this.versionSearchString);
            if (index === -1) {
            return;
            }

            var rv = dataString.indexOf("rv:");
            if (this.versionSearchString === "Trident" && rv !== -1) {
            return parseFloat(dataString.substring(rv + 3));
            } else {
            return parseFloat(dataString.substring(index + this.versionSearchString.length + 1));
            }
        },

        dataBrowser: [{
            string: navigator.userAgent,
            subString: "Chrome",
            identity: "Chrome"
            },
            {
            string: navigator.userAgent,
            subString: "MSIE",
            identity: "Explorer"
            },
            {
            string: navigator.userAgent,
            subString: "Trident",
            identity: "Explorer"
            },
            {
            string: navigator.userAgent,
            subString: "Firefox",
            identity: "Firefox"
            },
            {
            string: navigator.userAgent,
            subString: "Safari",
            identity: "Safari"
            },
            {
            string: navigator.userAgent,
            subString: "Opera",
            identity: "Opera"
            }
        ]

        };
</script>

    </div>
@endsection