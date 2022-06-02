@extends('admin_dir.theme')

@section('page','Espace utilisateur ')


@section('right content')
    <div class="row" id="display_info">

        <div class="col-xl-4">
            <div class="card m-b-30">
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
        <div class="col-xl-4">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="col-sm-9">
                        <h6 class="mb-0">Nom complet</h6>
                        <div class=" text-secondary">
                            {{ $user['name'] }}
                        </div>
                    </div>
                    <hr>
                    <div class="col-sm-9">
                        <h6 class="mb-0">Email</h6>
                        <div class=" text-secondary">
                            {{ $user['email'] }}
                        </div>
                    </div>
                    <hr>
                    <div class="col-sm-9">
                        <h6 class="mb-0">Téléphone</h6>
                        <div class=" text-secondary">
                            {{ $user['phone'] }}
                        </div>
                    </div>
                    <hr>
                    <div class="col-sm-9">
                        <h6 class="mb-0">CIN</h6>
                        <div class=" text-secondary">
                            {{ $user['cin'] }}
                        </div>
                    </div>
                    <hr>
                    <div class="col-sm-9">
                        <h6 class="mb-0">Ville</h6>
                        <div class=" text-secondary">
                            {{ $user['ville'] }}
                        </div>
                    </div>
                    <hr>
                    <div class="col-sm-9">
                        <h6 class="mb-0">État de compte</h6>
                        <div class=" text-secondary">
                            {{ $user['etat'] }}
                        </div>
                    </div>
                    <hr>

                    <div class="col-sm-12 ">
                        <a class="btn btn-info " href="{{ url()->previous() }}" >Retour</a>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
