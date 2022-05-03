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
      background: url("/uploads/media/default/0001/01/49bff73f282c2c21f3341f1fe457fe35337b1792.jpeg") no-repeat center;
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
            <label class="icon" for="age"><i class="fas fa-calendar"></i></i></label>
            <input type="number" name="age" id="age" placeholder="Age" value="{{ old('age') }}" required autocomplete="age"/>
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
            {{ __('cree') }}
        </button>
    </form>
</div>
@endsection
