@extends('nav')

@section('style')
<link rel="stylesheet" href="\css\second_page\second_page_style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
@endsection

@section('content')
<div class="container big animate__animated animate__fadeInTopLeft" >
    <form method="post" action="{{ route('second_page.update_annonce') }}">
        @csrf
        @method('put')

        @if ($bein['category'] == "Appartement")
            <div class="appartement">
                <fieldset id="form">
                    <div class="container">
                        <div class="title">
                            <h1> Modifie les Informations de votre appartement :</h1>
                        </div>
                        <table>
                            <tr>
                                <th>
                                    <div>
                                        <label for="chambre">Chambres  </label><br>
                                        <input type="number" id = "chambre" name = "chambre" value="{{ $bein['chambre'] }}" class="form-control">
                                    </div>
                                </th>

                                <th><div class="">
                                        <label for="salle_de_bain">Salle de bain  </label><br>
                                        <input type="number" id="salle_de_bain" name="salle_de_bain" value="{{ $bein['salle_de_bain'] }}"class="form-control">
                                    </div>
                                </th>
                                <th>
                                    <div >
                                        <label for="salon">Salons  </label><br>
                                        <input type="number" id="salon" name="salon" value="{{ $bein['salon'] }}" class="form-control">
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <div>
                                        <label for="etage">Numero d'étage  </label><br>
                                        <input type="number" name="etage" id="etage" value="{{ $bein['etage'] }}" class="form-control">
                                    </div>
                                </th>
                                <th>
                                    <div class="">
                                        <label for="surface_total">Surface totale (en m<sup>2</sup>)</label><br>
                                        <input type="number" name="surface_totale" id="surface_totale" value="{{ $bein['surface_totale'] }}" class="form-control" >
                                    </div>
                                </th>
                                <th>
                                    <div class="">
                                        <label for="age_de_bien">&Acircge de bien </label><br>
                                        <input type="number" name="age_de_bien" id="age_de_bien" value="{{ $bein['age_de_bien'] }}" class="form-control">
                                    </div>
                                </th>
                            </tr>
                        </table>
                    </div>
                </fieldset>
                <input type="text" value="immoblier" name="type" hidden>
                <input type="text" value="Appartement" name="category" hidden>
                <div class="send">
                    <button type="submit" class="btn btn-primary" >Suivant</button>
                </div>
            </div>
        @endif

        @if ($bein_type == "service")
            <div class="service">
                <fieldset id="form">
                    <div class="container">
                        <div class="title">
                            <h1>Modifie les Informations de votre {{$bein['category']}}:</h1>
                        </div>
                        <table>
                            <tr>
                                <th>
                                    <div>
                                        <label for="nbr_piece">Nombre de pièces  </label><br>
                                        <input type="number" id = "nbr_piece" name = "nbr_piece" value="{{ $bein['nbr_piece'] }}" class="form-control">
                                    </div>
                                </th>

                                <th><div>
                                        <label for="etage">Étage  </label><br>
                                        <input type="number" id="etage" name="etage" value="{{ $bein['etage'] }}"class="form-control">
                                    </div>
                                </th>
                                <th>
                                    <div >
                                        <label for="surface_totale">Surface totale  </label><br>
                                        <input type="number" id="surface_totale" name="surface_totale" value="{{ $bein['surface_totale'] }}" class="form-control">
                                    </div>
                                </th>
                                <th>
                                    <div>
                                        <label for="surface_soupente">Surface Soupente </label><br>
                                        <input type="number" name="surface_soupente" id="surface_soupente" value="{{ $bein['surface_soupente'] }}" class="form-control">
                                    </div>
                                </th>
                            </tr>
                        </table>
                    </div>
                </fieldset>
                <input type="text" name="type" value="service" hidden >
                <input type="text" name="category" value="{{$bein['category']}}" hidden >
                <div class="send">
                        <button type="submit" class="btn btn-primary float-right" >Suivant</button>
                </div>
            </div>
        @endif

        @if ($bein['category'] == "Maisson" || $bein['category'] == "Villa")
            <div class="mv">
                <fieldset id="form">
                    <div class="container">
                        <div class="title">
                            <h1>Modifie les informations de votre {{$bein['category']}} :</h1>
                        </div>
                        <table>
                            <tr>
                                <th>
                                    <div>
                                        <label for="chambre">Chambres  </label><br>
                                        <input type="number" id = "chambre" name = "chambre" value="{{ $bein['chambre'] }}" class="form-control">
                                    </div>
                                </th>

                                <th><div class="">
                                        <label for="salle_de_bain">Salle de bain  </label><br>
                                        <input type="number" id="salle_de_bain" name="salle_de_bain" value="{{ $bein['salle_de_bain'] }}"class="form-control">
                                    </div>
                                </th>
                                <th>
                                    <div >
                                        <label for="salon">Salons  </label><br>
                                        <input type="number" id="salon" name="salon" value="{{ $bein['salon'] }}" class="form-control">
                                    </div>
                                </th>
                                <th>
                                    <div>
                                        <label for="nbr_etage">Nombre d'étage  </label><br>
                                        <input type="number" name="nbr_etage" id="nbr_etage" value="{{ $bein['nbr_etage'] }}" class="form-control">
                                    </div>
                                </th>
                            </tr>
                            <tr>

                                <th>
                                    <div class="">
                                        <label for="surface_totale">Surface totale (en m<sup>2</sup>)</label><br>
                                        <input type="number" name="surface_totale" id="surface_totale" value="{{ $bein['surface_totale'] }}" class="form-control" >
                                    </div>
                                </th>
                                <th>
                                    <div class="">
                                        <label for="surface_habitable">Surface habitable (en m<sup>2</sup>)</label><br>
                                        <input type="number" name="surface_habitable" id="surface_habitable" value="{{ $bein['surface_habitable'] }}" class="form-control" >
                                    </div>
                                </th>
                                <th>
                                    <div class="">
                                        <label for="age_de_bien">&Acircge de bien </label><br>
                                        <input type="number" name="age_de_bien" id="age_de_bien" value="{{ $bein['age_de_bien'] }}" class="form-control">
                                    </div>
                                </th>
                            </tr>
                        </table>
                    </div>
                </fieldset>
                <input type="text" value="immoblier" name="type" hidden>
                <input type="text" value="{{$bein['category']}}" name="category" hidden>
                <div class="send">
                    <button type="submit" class="btn btn-primary float-right" >Suivant</button>
                </div>
            </div>
        @endif

        @if ($bein_type == "terrain")
            <div class="terrain">
                <fieldset id="form">
                    <div class="container">
                        <div class="title">
                            <h1>Modifie les informations de votre {{$bein['category']}} :</h1>
                        </div>
                        <table>
                            <tr>
                                <th class="col order-first">
                                    <label for="surface_totale" class="form-label"> <b> Surface totale</b>  </label>
                                    <input class="form-control" type="number" name="surface_totale" id="surface_totale" value="{{ $bein['surface_totale'] }}" required>
                                </th>
                            </tr>
                            <tr>
                                <th class="col order-last"><label for="zone" class="form-label"> <b>Zonning</b> </label>
                                <select name="zonning" id="zone" class="form-control" value="{{ $bein['zonning'] }}" required>
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
                    </div>
                </fieldset>
                <input type="text" name="type" value="terrain" hidden>
                <input type="text" value="{{$bein['category']}}" name="category" hidden>
                <div class="send">
                    <button type="submit" class="btn btn-primary float-right" >Suivant</button>
                </div>
            </div>
        @endif

        <input type="text" name="annonceID" value="{{ $annonceID }}" hidden>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
    $(function() {
    // Multiple images preview with JavaScript
    let multiImgPreview = function(input, imgPreviewPlaceholder) {

        if (input.files) {
            let filesAmount = input.files.length;

            for (let i = 0; i < filesAmount; i++) {
                let reader = new FileReader();

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
