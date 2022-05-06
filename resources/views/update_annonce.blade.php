@extends('nav')

@section('style')
<link rel="stylesheet" href="\css\second_page\second_page_style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
@endsection

@section('content')
<div class="big">
    <div class="container mt-5">
        <form action="{{route('last_page.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="user-image mb-3 text-center">
                <div class="imgPreview"> </div>
            </div>            

            <div class="custom-file">
                <input type="file" name="imageFile[]" class="custom-file-input" id="images" multiple="multiple">
                <label class="custom-file-label" for="images">Sélectionner des images</label>
            </div>

            <div class="wrap">
                <select class="select-css" name="transaction">
                    <option value="empty">Type de transaction</option>
                    <option value="vente">Vente</option>
                    <option value="location_mois">Location (mois)</option>
                    <option value="location_jour">Location (jour)</option>
                </select>
            </div>

            <div class="info">
                <input type="text" name="bein_ID" value="{{ $beinID }}" hidden>
                <input type="text" name="bein_type" value="{{ $type }}" hidden>
                <input type="text" name="user_ID" value="{{ Auth::user()->id}}" hidden>
                <label for="prix">Prix  </label><br>
                <input type="number" id="prix" name="prix" placeholder="--Saisissez" class="form-control" required>
                <label for="ville">Ville  </label><br>
                <input type="text" id="ville" name="ville" placeholder="--Saisissez" class="form-control" required >
                <label for="Titre">Titre  </label><br>
                <input type="text" id="Titre" name="titre" placeholder="--Saisissez" class="form-control" required>
                <label for="Description">Description </label><br>
                <textarea id="Description" name="description" placeholder="--Saisissez" class="form-control"></textarea>
            </div>

            <button type="submit" name="submit" class="btn btn-primary mt-4 button">
                Cree Annonce
            </button>
        </form>
    </div>
</div>
    <div class="container big animate__animated animate__fadeInTopLeft" >
        @csrf
        <form method="get" action="{{route('second_page.store')}}">
            <fieldset id="form">
                <div class="container">
                    <div class="title">
                        <h1>Informations sur votre appartement :</h1>
                    </div>  
                    <table>
                        <tr>
                            <th>
                                <div>
                                    <label for="chambre">Chambres  </label><br>
                                    <input type="number" id = "chambre" name = "chambre" placeholder="--Saisissez" class="form-control">
                                </div>
                            </th>
            
                            <th><div class="">
                                    <label for="salle_de_bain">Salle de bain  </label><br>
                                    <input type="number" id="salle_de_bain" name="salle_de_bain" placeholder="--Saisissez"class="form-control">
                                </div> 
                            </th>
                            <th>
                                <div >
                                    <label for="salon">Salons  </label><br>
                                    <input type="number" id="salon" name="salon" placeholder="--Saisissez" class="form-control">
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <div>
                                    <label for="etage">Numero d'étage  </label><br>
                                    <input type="number" name="etage" id="etage" placeholder="Saisissez 0 pour RDC" class="form-control"> 
                                </div>
                            </th>
                            <th>
                                <div class="">
                                    <label for="surface_total">Surface totale (en m<sup>2</sup>)</label><br>
                                    <input type="number" name="surface_totale" id="surface_totale" placeholder="                                 m&sup2" class="form-control" > 
                                </div>
                            </th>
                            <th>
                                <div class="">
                                    <label for="age_de_bien">&Acircge de bien </label><br>
                                    <input type="number" name="age_de_bien" id="age_de_bien" placeholder="--Saisissez" class="form-control"> 
                                </div>
                            </th>
                        </tr>
                    </table>
                    <div class="supp">
                        <h4> <b>Détails supplémentaires</b>  </h4>
                        <p> <i>Vous pouvez sélctionner un ou plusieurs critères. (optionnel)</i> </p><br>
                    </div>
                    <ul class="ks-cboxtags">
                        <li><input name="supp[]" type="checkbox" id="checkboxOne" value="Terrase"><label for="checkboxOne">Terrase</label></li>
                        <li><input name="supp[]" type="checkbox" id="checkboxTwo" value="Securusee"><label for="checkboxTwo">Securusee</label></li>
                        <li><input name="supp[]" type="checkbox" id="checkboxThree" value="Parking"><label for="checkboxThree">Parking</label></li>
                        <li><input name="supp[]" type="checkbox" id="checkboxFour" value="Climatise"><label for="checkboxFour">Climatise</label></li>
                        <li><input name="supp[]" type="checkbox" id="checkboxFive" value="Chauffage"><label for="checkboxFive">Chauffage</label></li>
                        <li><input name="supp[]" type="checkbox" id="checkboxSix" value="Cuisine equipe"><label for="checkboxSix">Cuisine equipe</label></li>
                        <li><input name="supp[]" type="checkbox" id="checkboxSeven" value="Meuble"><label for="checkboxSeven">Meuble</label></li>
                    </ul>
                </div>
            </fieldset>
            <input type="text" value="immoblier" name="type" hidden>
            <input type="text" value="app" name="category" hidden>
            <div class="send">
                <button type="submit" class="btn btn-primary" >Suivant</button>
            </div>
        </form>
    </div>

    {{-- service --}}
    <div class="container big animate__animated animate__fadeInTopLeft">
        <form method="get" action="{{route('second_page.store')}}">
            @csrf
            <fieldset id="form">
                <div class="container">
                    <div class="title">
                        <h1>Informations sur votre {{Request('category')}}:</h1>
                    </div>
                    <table>
                        <tr>
                            <th>
                                <div>
                                    <label for="nbr_piece">Nombre de pièces  </label><br>
                                    <input type="number" id = "nbr_piece" name = "nbr_piece" placeholder="--Saisissez" class="form-control">
                                </div>
                            </th>
            
                            <th><div>
                                    <label for="etage">Étage  </label><br>
                                    <input type="number" id="etage" name="etage" placeholder="--Saisissez"class="form-control">
                                </div> 
                            </th>
                            <th>
                                <div >
                                    <label for="surface_totale">Surface totale  </label><br>
                                    <input type="number" id="surface_totale" name="surface_totale" placeholder="--Saisissez" class="form-control">
                                </div>
                            </th>
                            <th>
                                <div>
                                    <label for="surface_soupente">Surface Soupente </label><br>
                                    <input type="number" name="surface_soupente" id="surface_soupente" placeholder="--Saisissez " class="form-control"> 
                                </div>
                            </th>
                        </tr>
                    </table>
                <div class="supp">
                    <h4> <b>Détails supplémentaires</b>  </h4>
                    <p> <i>Vous pouvez sélctionner un ou plusieurs critères. (optionnel)</i> </p><br>
                </div>
                 <ul class="ks-cboxtags">
                    <li><input name="supp[]" type="checkbox" id="checkboxOne" value="Securusee"><label for="checkboxOne">Securusee</label></li>
                    <li><input name="supp[]" type="checkbox" id="checkboxTwo" value="Parking"><label for="checkboxTwo">Parking</label></li>
                    <li><input name="supp[]" type="checkbox" id="checkboxThree" value="Climatise"><label for="checkboxThree">Climatise</label></li>
                    <li><input name="supp[]" type="checkbox" id="checkboxFour" value="Chauffage"><label for="checkboxFour">Chauffage</label></li>
                    <li><input name="supp[]" type="checkbox" id="checkboxFive" value="Ascenseur"><label for="checkboxFive">Ascenseur</label></li>
                </ul>
                </div>
            </fieldset>
            <input type="text" name="type" value="service" hidden >
            <div class="send">
                 <button type="submit" class="btn btn-primary float-right" >Suivant</button>
            </div>
        </form>
    </div>

    {{-- maisson_villa --}}
    <div class="container big animate__animated animate__fadeInTopLeft">
        <form method="get" action="{{route('second_page.store')}}">
            @csrf
            <fieldset id="form">
                <div class="container">
                    <div class="title">
                        <h1>Informations sur votre {{Request('category')}} :</h1>
                    </div>
                    <table>
                        <tr>
                            <th>
                                <div>
                                    <label for="chambre">Chambres  </label><br>
                                    <input type="number" id = "chambre" name = "chambre" placeholder="--Saisissez" class="form-control">
                                </div>
                            </th>
            
                            <th><div class="">
                                    <label for="salle_de_bain">Salle de bain  </label><br>
                                    <input type="number" id="salle_de_bain" name="salle_de_bain" placeholder="--Saisissez"class="form-control">
                                </div> 
                            </th>
                            <th>
                                <div >
                                    <label for="salon">Salons  </label><br>
                                    <input type="number" id="salon" name="salon" placeholder="--Saisissez" class="form-control">
                                </div>
                            </th>
                            <th>
                                <div>
                                    <label for="nbr_etage">Nombre d'étage  </label><br>
                                    <input type="number" name="nbr_etage" id="nbr_etage" placeholder="Saisissez 0 pour RDC" class="form-control"> 
                                </div>
                            </th>
                        </tr>
                        <tr>
                            
                            <th>
                                <div class="">
                                    <label for="surface_totale">Surface totale (en m<sup>2</sup>)</label><br>
                                    <input type="number" name="surface_totale" id="surface_totale" placeholder="                                 m&sup2" class="form-control" > 
                                </div>
                            </th>
                            <th>
                                <div class="">
                                    <label for="surface_habitable">Surface habitable (en m<sup>2</sup>)</label><br>
                                    <input type="number" name="surface_habitable" id="surface_habitable" placeholder="                                 m&sup2" class="form-control" > 
                                </div>
                            </th>
                            <th>
                                <div class="">
                                    <label for="age_de_bien">&Acircge de bien </label><br>
                                    <input type="number" name="age_de_bien" id="age_de_bien" placeholder="--Saisissez" class="form-control"> 
                                </div>
                            </th>
                        </tr>
                    </table>
                    <div class="supp">
                        <h4> <b>Détails supplémentaires</b>  </h4>
                        <p> <i>Vous pouvez sélctionner un ou plusieurs critères. (optionnel)</i> </p><br>
                    </div>  
                    <ul class="ks-cboxtags">
                        <li><input name="supp[]" type="checkbox" id="checkboxOne" value="Terrase"><label for="checkboxOne">Terrase</label></li>
                        <li><input name="supp[]" type="checkbox" id="checkboxTwo" value="Securusee"><label for="checkboxTwo">Securusee</label></li>
                        <li><input name="supp[]" type="checkbox" id="checkboxThree" value="Jardin"><label for="checkboxThree">Jardin</label></li>
                        <li><input name="supp[]" type="checkbox" id="checkboxFour" value="Piscine"><label for="checkboxFour">Piscine</label></li>
                        <li><input name="supp[]" type="checkbox" id="checkboxFive" value="Garage"><label for="checkboxFive">Garage</label></li>
                        <li><input name="supp[]" type="checkbox" id="checkboxSix" value="Parking"><label for="checkboxSix">Parking</label></li>
                        <li><input name="supp[]" type="checkbox" id="checkboxEight" value="Climatise"><label for="checkboxEight">Climatise</label></li><br>
                        <li><input name="supp[]" type="checkbox" id="checkboxNine" value="Chauffage"><label for="checkboxNine">Chauffage</label></li>
                        <li><input name="supp[]" type="checkbox" id="checkboxTen" value="Cuisine equipe"><label for="checkboxTen">Cuisine equipe</label></li>
                        <li><input name="supp[]" type="checkbox" id="checkboxEleven" value="Meuble"><label for="checkboxEleven">Meuble</label></li>
                    </ul>
                </div>
            </fieldset>
            <input type="text" value="immoblier" name="type" hidden>
            <input type="text" value="mv" name="category" hidden>
            <div class="send">
                <button type="submit" class="btn btn-primary float-right" >Suivant</button>
            </div>
        </form>   
    </div>

    {{-- terrain --}}
    <div class="container big animate__animated animate__fadeInTopLeft">
        <form method="get" action="{{route('second_page.store')}}">
            @csrf
            <fieldset id="form">
                <div class="container">
                    <div class="title">
                        <h1>Informations sur votre {{Request('category')}} :</h1>
                    </div>
                    <table>
                        <tr>
                            <th class="col order-first">    
                                <label for="surface_totale" class="form-label"> <b> Surface totale</b>  </label>
                                <input class="form-control" type="number" name="surface_totale" id="surface_totale" placeholder="                            m&sup2"  required>
                            </th> 
                        </tr>
                        <tr>
                            <th class="col order-last"><label for="zone" class="form-label"> <b>Zonning</b> </label>
                            <select name="zonning" id="zone" class="form-control" required>
                                <option value="">---Choisissez</option>
                                <option value="agricole">Agricole</option>
                                <option value="industriel">Industriel</option>
                                <option value="immeuble">Immeuble</option>
                                <option value="maison">Maison</option>
                                <option value="villa">Villa</option>
                                <option value="servicePublic">Service Public </option>
                            </select>
                            </th>
                        </tr>
                </table>
                <div class="supp">
                    <h4> <b>Détails supplémentaires</b>  </h4>
                    <p> <i>Vous pouvez sélctionner un ou plusieurs critères. (optionnel)</i> </p><br>
                </div>
                <ul class="ks-cboxtags">
                    <li><input name="supp[]" type="checkbox" id="checkboxOne" value="Lotissement"><label for="checkboxOne">Lotissement</label></li>
                    <li><input name="supp[]" type="checkbox" id="checkboxTwo" value="Titré"><label for="checkboxTwo">Titré</label></li>
                </ul>
                </div>
            </fieldset>
            <input type="text" name="type" value="terrain" hidden>
            <div class="send">
                <button type="submit" class="btn btn-primary float-right" >Suivant</button>
            </div>
        </form>
    </div>
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
    $(function() {
    // Multiple images preview with JavaScript
    var multiImgPreview = function(input, imgPreviewPlaceholder) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#images').on('change', function() {
        multiImgPreview(this, 'div.imgPreview');
    });
    });    
</script>
@endsection