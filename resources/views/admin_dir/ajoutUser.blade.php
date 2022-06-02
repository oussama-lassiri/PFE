@extends('admin_dir.theme')

<!--@section('style admin')
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>

         input {
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

        [type="radio"]:checked,
        [type="radio"]:not(:checked){
            position: absolute;
            left: -9999px;
            width: 0;
            height: 0;
            visibility: hidden;
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
-->
@endsection
@section('page','Creation compte utilisateur ')

@section('right content')

    <div class="row">

            <h1>Creation d'un nouveau compte</h1>

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
                                <input class="checkbox-tools" type="radio" name="genre" id="tool-1" value="Homme" checked>
                                <label class="for-checkbox-tools" for="tool-1">
                                    <i class='uil uil-line-alt'></i>
                                    Homme
                                </label><!--
                            --><input class="checkbox-tools" type="radio" name="genre" id="tool-2" value="Femme">
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
                    <input type="tel" name="phone" id="phone" placeholder="Telephone" value="{{ old('phone') }}" required autocomplete="phone"/>
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

@section('JS')

@endsection
