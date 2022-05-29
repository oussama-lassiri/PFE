@extends('admin_dir.theme')

@section('style')

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
                    <label class="icon" for="ville"><i class="fas fa-city"></i></i></label>
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

@section('JS')

@endsection
