@extends('admin_dir.theme')

@section('style')

@endsection

@section('page','Gestion compte utilisateur ')

@section('right content')

    <div class="row">

        <div class="col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Liste des utilisateurs</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Nbre d'annonces</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Ville</th>
                                <th scope="col" colspan="2">Rejoignez à</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $i= 0; ?>
                            @foreach ($user as $u)
                                <tr>
                                    <td>
                                        <div>
                                            <img src="assets/images/user-2.jpg" alt="" class="thumb-md rounded-circle mr-2">{{ $u['name'] }}
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">{{ $u['etat'] }}</span></td>
                                    <!-- $nb_annonce['id_u'] = $u['id']-->
                                    <td align="center"> {{ $nb_annonce["$i"] }} </td>
                                    <td>{{ $u['phone'] }}</td>
                                    <td>{{ $u['ville'] }}</td>
                                    <td>{{ $u['created_at'] }}</td>
                                    <?php $i++ ?>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm" >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                            </a>
                                            <a href="#" class="btn btn-primary btn-sm" >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                                </svg>
                                            </a>
                                            <a href="#" class="btn btn-primary btn-sm" >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
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

@endsection

@section('JS')

@endsection
