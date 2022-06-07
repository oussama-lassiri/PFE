@extends('admin_dir.theme')
@section('title admin','Liste Utilisateurs')
@section('page','Espace utilisateur ')


@section('right content')

    <div class="row" >
        <div class="col-xl-12">
            @if(Session::has('message'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>&nbsp;
                    {{ Session::get('message') }}
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
                                            <a href="{{route('admin_user.display')}}?u={{ $u['id'] }}" class="btn btn-primary btn-sm"  >
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

@endsection

