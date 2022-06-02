@extends('nav')

@section('style')
    <title>Cree account</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
      body {
        background: #FFEFBA;
        background: -webkit-linear-gradient(to right, #FFFFFF, #FFEFBA);
        background: linear-gradient(to right, #FFFFFF, #FFEFBA);
        }
      h1, h3, input {
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #666;
      }
      .container{
          position: relative;
          top: 15%;
          left: 20%;
          align-items: center;
          align-content: center;
      }
      h1, h3 {
      font-weight: 400;
      }
      h1 {
      font-size: 28px;
      }
      .main-block, .info {
      display: flex;
      flex-direction: column;
      }
      .main-block {
      justify-content: center;
      align-items: center;
      width: 100%;
      min-height: 100%;
      background: url("./uploads/media/default/0001/01/49bff73f282c2c21f3341f1fe457fe35337b1792.jpeg") no-repeat center;
      background-size: cover;
      }
      form {
      width: 50%;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 5px;
      border: solid 1px #ccc;
      box-shadow: 1px 2px 5px rgba(0,0,0,.31);
      background: #ebebeb;
      }
      input {
      width: calc(100% - 57px);
      height: 36px;
      padding-left: 10px;
      margin: 0 0 12px -5px;
      border-radius: 0 5px 5px 0;
      border: solid 1px #cbc9c9;
      box-shadow: 1px 2px 5px rgba(0,0,0,.09);
      background: #fff;
      }
      .icon {
      padding: 9px 15px;
      margin-top: -1px;
      border-radius: 5px 0 0 5px;
      border: solid 0px #cbc9c9;
      background: #666;
      color: #fff;
      }
      .sbt {
      width: 100%;
      padding: 8px;
      border-radius: 5px;
      border: none;
      background: #e2a9e5 ;
      background: -moz-linear-gradient(-45deg, #e2a9e5 15%, #2b94e5 100%);
      background: -webkit-linear-gradient(-45deg, #e2a9e5 15%,#2b94e5 100%);
      background: linear-gradient(135deg, #e2a9e5 15%,#2b94e5 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2a9e5', endColorstr='#2b94e5',GradientType=1 );
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      .sbt:hover {
        background: #4b384c;
        background: -moz-linear-gradient(-45deg, #4b384c 15%, #da5de2 100%);
        background: -webkit-linear-gradient(-45deg, #4b384c 15%,#da5de2 100%);
        background: linear-gradient(135deg, #4b384c 15%,#da5de2 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4b384c', endColorstr='#da5de2',GradientType=1 );
      }
      .grade-type div {
      display: flex;
      margin: 6px 0;
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
	box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.05);
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
	box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.05);
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
<div class="container">
    <h1>Creation du compte</h1>
    <h4>S'il vous plaît,Saisissez vos informations:</h4>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="info-item">
            <label class="icon" for="name"><i class="fas fa-user"></i></label>
            <input type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="name" placeholder="Nom" required autocomplete="name" autofocus/>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="info-item">
            <label class="icon" for="cin"><i class="fas fa-id-badge "></i></label>
            <input type="text"  name="cin" id="cin" placeholder="CIN" value="{{ old('cin') }}" required autocomplete="cin"/>
        </div>

        <div  class="info-item">
            <label class="icon" for="ville"><i class="fas fa-city"></i></label>
            <input type="text" name="ville" id="ville" placeholder="Ville" value="{{ old('ville') }}" required autocomplete="ville"/>
        </div>

        <div class="section z-bigger justify-content-between">
                <div class="container ">
                    <div class="row ">
                        <div class="col-7">
                            <input class="checkbox-tools" type="radio" name="genre" id="tool-1" value="Homme" >
                            <label class="for-checkbox-tools" for="tool-1">
                                <i class='uil uil-line-alt'></i>
                                Homme
                            </label>
                            <input class="checkbox-tools" type="radio" name="genre" id="tool-2" value="Femme" checked>
                            <label class="for-checkbox-tools" for="tool-2">
                                <i class='uil uil-vector-square'></i>
                                Femme
                            </label>
                        </div>
                    </div>
                </div>
            </div>

        <div  class="info-item">
            <label class="icon" for="email"><i class="fas fa-envelope"></i></label>
            <input type="text" class=" @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email"/>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div  class="info-item">
            <label class="icon" for="phone"><i class="fas fa-phone"></i></label>
            <input type="phone" name="phone" id="phone" placeholder="Telephone" value="{{ old('phone') }}" required autocomplete="phone"/>
        </div>

        <div  class="info-item">
            <label class="icon" for="password"><i class="fas fa-unlock-alt"></i></label>
            <input type="password" name="password" id="password" class="@error('password') is-invalid @enderror" placeholder="Mot de passe" required autocomplete="new-password"/>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div  class="info-item">
            <label class="icon" for="password-confirm"><i class="fas fa-unlock-alt"></i></label>
            <input type="password" name="password_confirmation" id="password-confirm" placeholder="Confirmer le mot de passe" required autocomplete="new-password"/>
        </div>

        <button type="submit" class="sbt">
            {{ __('créé') }}
        </button>
    </form>
</div>
@endsection
