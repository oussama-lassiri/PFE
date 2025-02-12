@extends('admin_dir.theme')
@section('title admin','Gestion Utilisateur')
@section('style admin')

@endsection

@section('page','Gestion comptes utilisateurs ')

@section('right content')

    <div class="row">
        <div class="col-xl-12">
            @if(Session::has('message'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>&nbsp;
                    {{ Session::get('message') }} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </svg>
                </div>

            @endif
        </div>

        <div class="col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Liste des utilisateurs</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th>CIN</th>
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
                                    <td>{{ $u['name'] }}</td>
                                    <td>{{ $u['cin'] }}</td>
                                    <td><span class="btn btn-outline-info">{{ $u['etat'] }}</span></td>
                                    <td align="center"> {{ $nb_annonce["$i"] }} </td>
                                    <td>{{ $u['phone'] }}</td>
                                    <td>{{ $u['ville'] }}</td>
                                    <td>{{ $u['created_at'] }}</td>
                                    <?php $i++ ?>
                                    <td>
                                        <div>
                                            @if($u['etat'] == "active")
                                            <a href="{{ route('admin_user.etat') }}?u={{ $u['id'] }}" class="btn btn-primary btn-sm" >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-dash-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
                                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                </svg>
                                            </a>
                                            @else
                                            <a href="{{ route('admin_user.etat') }}?u={{ $u['id'] }}" class="btn btn-success btn-sm" >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                                    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                                                    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                                                </svg>
                                            </a>
                                            @endif
                                            <a href="{{ route('admin_user.delete') }}?u={{ $u['id'] }}"  onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');" class="btn btn-warning btn-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                            </a>
                                            <a href="{{ route('admin_user.block') }}?u={{ $u['id'] }}" class="btn btn-danger btn-sm" >
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
    <script>
        $('.alert').alert();
    </script>

@endsection
