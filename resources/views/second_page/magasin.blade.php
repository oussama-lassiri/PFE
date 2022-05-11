@extends('nav')

@section('style')
    <link rel="stylesheet" href="\css\second_page\second_page_style.css">
@endsection

@section('content')
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
                <p> <i>Vous pouvez sélectionner un ou plusieurs critères. (optionnel)</i> </p><br>
            </div>
             <ul class="ks-cboxtags">
                <li><input name="supp[]" type="checkbox" id="checkboxOne" value="Securusee"><label for="checkboxOne">Sécurisée</label></li>
                <li><input name="supp[]" type="checkbox" id="checkboxTwo" value="Parking"><label for="checkboxTwo">Parking</label></li>
                <li><input name="supp[]" type="checkbox" id="checkboxThree" value="Climatise"><label for="checkboxThree">Climatisé</label></li>
                <li><input name="supp[]" type="checkbox" id="checkboxFour" value="Chauffage"><label for="checkboxFour">Chauffage</label></li>
                <li><input name="supp[]" type="checkbox" id="checkboxFive" value="Ascenseur"><label for="checkboxFive">Ascenseur</label></li>
            </ul>
            </div>
        </fieldset>
        <input type="text" name="type" value="service" hidden >
        <input type="text" value="{{Request('category')}}" name="category" hidden>
        <div class="send">
             <button type="submit" class="btn btn-primary float-right" >Suivant</button>
        </div>
    </form>

</div>

@endsection
