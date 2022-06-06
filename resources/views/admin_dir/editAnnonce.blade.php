@extends('admin_dir.theme')

@section('style admin')

    <style>
        .container {
            background: #1a202c;
            align-self: center;
            width: 650px;
            max-width: 100%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 15px;
            text-decoration-color: #9fcdff;
        }
        .imgPreview img {
            padding: 8px;
            max-width: 100px;
        }
        .wrap {
            max-width: 500px;
            padding-top: 3%;
        }
        .button{
            position: relative;
            left: 40%;
        }
    </style>
    <!--<style>


        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .select-css {
            display: block;
            font-size: 16px;
            font-family: sans-serif;
            font-weight: 700;
            color: #444;
            line-height: 1.3;
            padding: .6em 1.4em .5em .8em;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
            margin: 0;
            border: 1px solid #aaa;
            box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
            border-radius: 0;
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
            //background-color: #fff;
            background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E');
            background-repeat: no-repeat, repeat;
            background-position: right .7em top 50%, 0 0;
            background-size: .65em auto, 100%;
        }
        .select-css::-ms-expand {
            display: none;
        }
        .select-css:hover {
            border-color: #888;
        }
        .select-css:focus {
            border-color: #aaa;
            box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
            box-shadow: 0 0 0 3px -moz-mac-focusring;
            color: #222;
            outline: none;
        }
        .select-css option {
            font-weight:normal;
        }
        .button{
            position: relative;
            left: 40%;
        }
    </style>-->
@endsection

@section('page', 'Espace annonce ')

@section('right content')

    <div class="row">
            <div class="container ">
                <form action="{{route('last_page.update', ['uk'])}}" method="post" enctype="multipart/form-data">
                    @method('put')
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
                        <input type="file" name="imageFile[]" class="custom-file-input" id="images" multiple="multiple" required>
                        <label class="custom-file-label" for="images">re-sélectionner des images</label>
                    </div>

                    <div class="wrap">
                        <select class="select-css" name="transaction" required>
                            <option value="empty">Type de transaction</option>
                            <option value="vente">Vente</option>
                            <option value="location mois">Location (mois)</option>
                            <option value="location jour">Location (jour)</option>
                        </select>
                    </div>

                    <div class="info">
                        <input type="text" name="bein_ID" value="{{ $beinID }}" hidden>
                        <input type="text" name="annonceID" value="{{ $annonce['id'] }}" hidden>
                        <input type="text" name="bein_type" value="{{ $type }}" hidden>
                        <input type="text" name="user_ID" value="{{ Auth::user()->id}}" hidden>
                        <label for="prix">Prix  </label><br>
                        <input type="number" id="prix" name="prix" value="{{ $annonce['prix'] }}" class="form-control" required>
                        <label for="ville">Ville  </label><br>
                        <input type="text" id="ville" name="ville" value="{{ $annonce['ville'] }}" class="form-control" required >
                        <label for="Titre">Titre  </label><br>
                        <input type="text" id="Titre" name="titre" value="{{ $annonce['titre'] }}" class="form-control" required>
                        <label for="Description">Description </label><br>
                        <textarea id="Description" name="description" value="{{ $annonce['description'] }}" class="form-control">{{ $annonce['description'] }}</textarea>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary mt-4 button">
                        Enregistrer
                    </button>
                    <br>
                    <br>
                </form>
            </div>
    </div>

@endsection

@section('JS')
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
