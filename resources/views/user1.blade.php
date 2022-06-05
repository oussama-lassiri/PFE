@extends('nav')

@section('style')
    <link rel="stylesheet" href="\css\user\dist\pop.css">
    <link rel="stylesheet" href="/css/user/style.css">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
    rel="stylesheet"
    />
    <style>
        body{
            margin-top:20px;
            color: #1a202c;
            text-align: left;
        }
        .main-body {
            padding: 15px;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .gutters-sm>.col, .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }
        .mb-3, .my-3 {
            margin-bottom: 1rem!important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }
        .h-100 {
            height: 100%!important;
        }
        .shadow-none {
            box-shadow: none!important;
        }

        @import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
        * {
        box-sizing: border-box;
        }
        body {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        }
        .cont {
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
        }
        .card1 {
        margin: 10px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        width: 300px;
        }
        .card-header img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        }
        .card-body1 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        padding: 20px;
        min-height: 250px;
        }

        .tag {
        background: #cccccc;
        border-radius: 50px;
        font-size: 12px;
        margin: 0;
        color: #fff;
        padding: 2px 10px;
        text-transform: uppercase;
        cursor: pointer;
        }
        .tag-teal {
        background-color: #47bcd4;
        }
        .tag-purple {
        background-color: #5e76bf;
        }
        .tag-pink {
        background-color: #cd5b9f;
        }

        .card-body1 p {
        font-size: 13px;
        margin: 0 0 40px;
        }
        .user {
        display: flex;
        margin-top: auto;
        }

        .user img {
        border-radius: 50%;
        width: 40px;
        height: 40px;
        margin-right: 10px;
        }
        .user-info h5 {
        margin: 0;
        }
        .user-info small {
        color: #545d7a;
        }


        @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');

        .img{
            width: 250px;
        }

        button:focus {
            box-shadow: none ;
            outline-width: 0;
        }

        .card{
            border-radius:11px ;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5) ;
            border-top-color: #52B4DB ;
        }

        .modal-content{
            width: calc(330px + 10 * ((100vw - 320px) / 680)) ;
            border-radius: 11px ;
        }
        .card-header{
            border:0;
            border-top: 14px solid #52B4DB ;
            border-radius:11px ;

        }

        .btn-outline-success{
            border-radius: 20px ;
            border:2px solid #52B4DB ;

        }

        .btn-outline-success:hover{
            color: #fff ;
            background-color: #52B4DB ;
        }

        .img{
            width: 350px ;
        }

        .card-body{
            border-radius: 9px ;
        }

        .btn-outline-success:active, .btn-outline-success.active {
            box-shadow: none ;
            outline: none ;
        }

        .etat{
          margin-bottom: 3%;
        }

        .block{
          background-image: linear-gradient(to right top, #ff337c, #ff326c, #ff345c, #ff394b, #ff413a);
          color: #ffffff;
        }

        .inac{
          background-image: linear-gradient(to right top, #00ffc5, #00ffab, #00ff8c, #00ff65, #03ff2d);
          color: #ffffff;
        }

        @media (max-width: 401px) {
            .card{
                width: unset;
            }
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="main-body">

          @if ($user['etat'] == "inactive")
            <div class="card etat inac">
              <div class="card-body">
                <h5>Veuillez patienter jusqu'à ce qu'un de nos administrateurs confirme les informations de votre compte.</h5>
                <h6>Après la confirmation, vous aurez un accès complet à nos services.</h6>
              </div>
            </div>
          @endif
          @if ($user['etat'] == "bloque")
            <div class="card etat block">
              <div class="card-body">
                <h5>Ce compte a été bloqué en raison de la détection par notre système d'un mauvais comportement.</h5>
                <h6>Pour plus d'informations, contactez-nous.</h6>
              </div>
            </div>
          @endif

          <div class="row gutters-sm col-md-12">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ $user['name'] }}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8" id="info">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nom complet</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user['name'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $user['email'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Téléphone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $user['phone'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">CIN</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $user['cin'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Ville</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $user['ville'] }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">État de compte</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $user['etat'] }}
                      @if ($user['etat'] == "inactive")
                          (en attente de l'activation de ce compte par un administrateur)
                      @endif
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12 centered">
                      <button class="btn btn-success" onclick="toggleText(3)">Modifier</button>
                      @if ($user['etat'] == "desactive")
                        <button class="btn btn-info " onclick="toggleText(1)">Activer</button>
                      @endif
                      @if ($user['etat'] == "active")
                        <button class="btn btn-dark " onclick="toggleText(1)">Desactive</button>
                      @endif
                      <button class="btn btn-danger " onclick="toggleText(2)">Supprimer</button>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-8 card" id="activation" style="display: none;">
            <div class="row alert alert-info" role="alert">
              <form method="GET" action="{{ route('second_page.update_user') }}">
                @csrf
                <input type="text" name="id" value="{{ $user['id']}}" hidden/>
                    <h3 class="alert-heading">Attention!</h3>
                    <hr>
                    @if ($user['etat'] == "desactive")
                      <h4>Si vous active votre compte, toutes vos annonces seront active.</h4>
                      <h5>  Êtes-vous sûr de vouloir active votre compte ?</h5>
                    @endif
                    @if ($user['etat'] == "active")
                      <h4>Si vous désactiver votre compte, toutes vos annonces seront désactiver.</h4>
                      <h5>  Êtes-vous sûr de vouloir désactiver votre compte ?</h5>
                    @endif
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-light me-md-2" type="button" onclick="toggleText(4)">Annuler</button>
                    @if ($user['etat'] == "desactive")
                      <button class="btn btn-info" type="submit" name="etat" value="active">Activer</button>
                    @else
                      <button class="btn btn-danger " type="submit" name="etat" value="desactive">Désactiver</button>
                    @endif
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-8 card" id="suppression" style="display: none;">
            <div class="row alert alert-danger" role="alert">
                <h3 class="alert-heading">Attention!</h3>
                <hr>
                <h4>Si vous supprimez votre compte, toutes vos annonces seront supprimées. </h4>
                <h5>  Êtes-vous sûr de vouloir supprimer votre compte ?</h5>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-light me-md-2" type="button" onclick="toggleText(4)">Annuler</button>
                    <button class="btn btn-danger " type="button">Supprimer</button>
                </div>
            </div>
          </div>

          <div class="tab-pane text-center gallery col-md-8 m-0" id="modification" style="display: none;">
                    <div class="container modifie">
                    <form method="GET" action="{{ route('second_page.update_user') }}">
                        @csrf
                        <input type="text" name="id" value="{{ $user['id']}}" hidden/>
                        <div class="info-item">
                            <label class="icon" for="name"><i class="fas fa-user"></i></label>
                            <input type="text" name="name" id="name" value="{{ $user['name']}}" required autocomplete="name" autofocus/>
                        </div>

                        <div class="info-item">
                            <label class="icon" for="cin"><i class="fas fa-id-badge "></i></label>
                            <input type="text"  name="cin" id="cin" value="{{ $user['cin']}}" required autocomplete="cin"/>
                        </div>

                        <div  class="info-item">
                            <label class="icon" for="ville"><i class="fas fa-calendar"></i></label>
                            <input type="text" name="ville" id="ville" value="{{ $user['ville']}}"  required autocomplete="ville"/>
                        </div>

                        <div  class="info-item">
                            <label class="icon" for="email"><i class="fas fa-envelope"></i></label>
                            <input type="text" class="" name="email" id="email" value="{{ $user['email']}}"  required autocomplete="email"/>
                        </div>

                        <div  class="info-item">
                            <label class="icon" for="phone"><i class="fas fa-phone"></i></label>
                            <input type="phone" name="phone" id="phone" value="{{ $user['phone']}}" placeholder="Telephone" required autocomplete="phone"/>
                        </div>

                        <button type="submit" class="sbt" name="modifie" value="modifie">Enregistre</button><button type="button" class="sbt annuler" onclick="toggleText(5)">Annuler</button>
                    </form>
                </div>
  			</div>
          <div class="cont col-12">
            @if ($message = Session::has('success'))
              <div class="alert alert-success">
                  <strong>{{ $message }}</strong>
              </div>
            @endif
            <?php $i= 0; ?>
              @foreach ($annonce as $item)
                <div class="card1 col-8">
                  <div class="card-header">
                      <img src="\uploads\{{ $item['images_path'] }}" alt="bein" />
                  </div>
                  <div class="card-body1">
                    @if($item['bein_type'] == "immobilier")
                    <span class="tag tag-teal"> {{ $bein_category["$i"] }} </span>
                    @endif
                    @if ($item['bein_type'] == "terrain")
                    <span class="tag tag-purple"> {{ $bein_category["$i"] }} </span>
                    @endif
                    @if($item['bein_type'] == "service")
                    <span class="tag tag-pink"> {{ $bein_category["$i"] }} </span>
                    @endif
                    <?php $i++ ?>
                    <h4>
                      {{ $item['titre'] }}
                    </h4>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">{{ $item['transaction'] }}</li>
                      <li class="list-group-item">Ville:  {{ $item['ville'] }}</li>
                      <li class="list-group-item">Prix:   {{ $item['prix'] }} DH</li>
                      <li class="list-group-item">Etat:   {{ $item['etat'] }}</li>
                    </ul>
                    <div class="user">
                      <div class="card-body d-flex justify-content-center">
                          <a href="{{route('second_page.edit')}}?annonce={{ $item['id'] }}" class="btn btn-success  float-end" data-toggle="tooltip"  title="Modifier">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                              </svg>
                          </a>
                          <a href="{{route('second_page.destroy_bien')}}?annonce={{ $item['id']}}" class="btn btn-danger  float-start"  data-toggle="modal" data-target="#ModalDelete{{$item['id']}}"  title="Supprimer">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                              </svg>
                          </a>
                            @if ($item['etat'] == "desactive")
                              <a href="{{route('second_page.edit')}}?annonce={{ $item['id'] }}&etat=active" class="btn btn-info ">Activer</a>
                            @endif
                            @if ($item['etat'] == "active")
                              <a href="{{route('second_page.edit')}}?annonce={{ $item['id'] }}&etat=desactive" class="btn btn-dark ">Desactive</a>
                            @endif
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
        </div>
        </div>
    </div>

    <script>

        function toggleText(id){
            var x = document.getElementById("activation");
            var y = document.getElementById("suppression");
            var z = document.getElementById("modification");
            var w = document.getElementById("info");
            if(id === 1){
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
                w.style.display = "none";
                y.style.display = "none";
                z.style.display = "none";
                $("#activation").hide();
                $("#activation").show();
                        }
            if(id === 2){
                if (y.style.display === "none") {
                    y.style.display = "block";
                } else {
                    y.style.display = "none";
                }
                w.style.display = "none";
                x.style.display = "none";
                z.style.display = "none";
                $("#suppression").hide();
                $("#suppression").show();
            }
            if(id === 3){
                if (z.style.display === "none") {
                    z.style.display = "block";
                } else {
                    z.style.display = "none";
                }
                w.style.display = "none";
                y.style.display = "none";
                x.style.display = "none";
                $("#modification").hide();
                $("#modification").show();
            }
            if(id === 4){
                if (w.style.display === "none") {
                    w.style.display = "block";
                    x.style.display = "none";
                } else {
                    w.style.display = "none";
                    x.style.display = "block";
                }
                y.style.display = "none";
                z.style.display = "none";
                $("#info").hide();
                $("#info").show();
            }
            if(id === 5){
                if (w.style.display === "none") {
                    w.style.display = "block";
                    z.style.display = "none";
                } else {
                    w.style.display = "none";
                    z.style.display = "block";
                }
                y.style.display = "none";
                x.style.display = "none";
                $("#info").hide();
                $("#info").show();
            }
        }
      </script>
@endsection
