@extends('admin_dir.theme')

@section('page','Espace utilisateur ')

@section('right content')

    <div class="row" >
        <div class="col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Liste des utilisateurs</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Status</th>
                                <th scope="col">Email</th>
                                <th scope="col">Numéro</th>
                                <th scope="col">CIN</th>
                                <th scope="col">Ville</th>
                                <th scope="col" colspan="2">Rejoignez à</th>

                            </tr>
                            </thead>
                            <tbody>
                            @php($i=0)
                            @foreach ($user as $u)
                                <tr>
                                    <td>{{ $u['name'] }}</td>
                                    <td><span class="badge badge-success">{{ $u['etat'] }}</span></td>
                                    <td> {{ $u['email'] }} </td>
                                    <td>{{ $u['phone'] }}</td>
                                    <td>{{ $u['cin'] }}</td>
                                    <td>{{ $u['ville'] }}</td>
                                    <td>{{ $u['created_at'] }}</td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm" onclick="toggleText(1)" >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="display_info">
        <div class="col-xl-4">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                            <h4>{{ $u['name'] }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Nom complet</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $u['name'] }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $u['email'] }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Téléphone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $u['phone'] }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">CIN</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $u['cin'] }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Ville</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $u['ville'] }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">État de compte</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $u['etat'] }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 ">
                            <button class="btn btn-info " onclick="toggleText(2)">Retour</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('JS')
    <script>

        function toggleText(id){
            //let x = document.getElementById("liste");
            let y = document.getElementById("display_info");
            $("#display_info").hide();
            if(id === 1){
                if (y.style.display === "none") {
                    y.style.display = "block";
                } //else {
                   // x.style.display = "none";
                //}
                $("#display_info").hide();
                $("#display_info").show();
            }
            if(id === 2){
                if (y.style.display === "block") {
                    y.style.display = "none";
                } //else {
                   // y.style.display = "none";
                //}
                $("#display_info").hide();
            }
        }
    </script>
@endsection
