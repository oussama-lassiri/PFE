@extends('nav')

@section('style')
<link rel="stylesheet" href="\css\second_page\second_page_style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
@endsection

@section('content')
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
            <input type="text" value="Appartement" name="category" hidden>
            <div class="send">
                <button type="submit" class="btn btn-primary" >Suivant</button>
            </div>
        </form>
        
    </div>
@endsection