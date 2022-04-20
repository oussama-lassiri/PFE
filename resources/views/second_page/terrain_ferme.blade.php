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
 
@endsection