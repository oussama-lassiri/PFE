@extends('admin_dir.theme')

@section('page','Dashboard ')

@section('right content')

                <div class="row">

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-heading p-4">
                                <div class="mini-stat-icon float-right">
                                    <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                                </div>
                                <div>
                                    <h5 class="font-16">Sessions actives</h5>
                                </div>
                                <h4 class="mt-4">2 sessions</h4>
                                <div class="progress mt-4" style="height: 4px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-heading p-4">
                                <div class="mini-stat-icon float-right">
                                    <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                                </div>
                                <div>
                                    <h5 class="font-16">Total d'utilisateurs</h5>
                                </div>
                                <h4 class="mt-4">{{ $users }} utilisateurs</h4>
                                <div class="progress mt-4" style="height: 4px;">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-heading p-4">
                                <div class="mini-stat-icon float-right">
                                    <i class="mdi mdi-tag-text-outline bg-warning text-white"></i>
                                </div>
                                <div>
                                    <h5 class="font-16">Total d'annonces</h5>
                                </div>
                                <h4 class="mt-4">{{ $an_totale }}</h4>
                                <div class="progress mt-4" style="height: 4px;">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-heading p-4">
                                <div class="mini-stat-icon float-right">
                                    <i class="mdi mdi-buffer bg-danger text-white"></i>
                                </div>
                                <div>
                                    <h5 class="font-16">Annonces ajoutées</h5>
                                </div>
                                <h4 class="mt-4">{{$sta}}</h4>
                                <div class="progress mt-4" style="height: 4px;">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title mb-4">Graphique à aires </h4>

                                <div id="morris-area-example" class="morris-charts morris-chart-height"></div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Graphique circulaire</h4>

                                <div id="morris-donut-example" class="morris-charts morris-chart-height"></div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Nouveau utilisateurs</h4>
                                <div class="friends-suggestions">
                                    @foreach($new_user as $nvu)
                                        <div class="friends-suggestions-list">
                                            <div class="border-bottom position-relative">
                                                <div class="float-left mb-0 mr-3">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="rounded-circle thumb-md">
                                                </div>
                                                <div class="suggestion-icon float-right mt-2 pt-1">
                                                    <a href="{{route('admin_user.display')}}?u={{ $nvu['id'] }}" class="btn btn-primary rounded-circle btn-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                        </svg>
                                                    </a>
                                                    <a href="{{ route('admin_user.etat') }}?u={{ $nvu['id'] }}" class="btn btn-success rounded-circle btn-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                                            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                                                            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="desc">
                                                    <h5 class="font-14 mb-1 pt-2 text-uppercase">{{$nvu['name']}}, {{$nvu['ville']}} </h5>
                                                    <p>Cree le : <b class="text-muted">{{$nvu['created_at']}}</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
<!--
                    <div class="col-xl-4">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Statistiques des annonces</h4>
                                <div id="morris-line-example" class="morris-chart" style="height: 360px"></div>

                            </div>
                        </div>

                    </div>
-->
                    <div class="col-xl-6">

                        <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Nouveaux annonces</h4>
                                <ol class="activity-feed mb-0">
                                    <?php $a= 0; ?>
                                    @foreach($new_annonce as $nva)
                                    <li class="feed-item">
                                        <div class="feed-item-list">
                                            <p class="text-muted mb-1">{{$nva['created_at']}}</p>
                                            <p class="font-15 mt-0 mb-0"><b class="text-uppercase ">{{$user_nom["$a"]}}</b> a créé une annonce de type : <b class="text-success">{{$nva['bein_type']}}</b></p>
                                        </div>
                                    </li>
                                    <?php $a++ ?>

                                    @endforeach

                                </ol>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- START ROW -->
                <div class="row">
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
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="thumb-md rounded-circle mr-2">{{ $u['name'] }}
                                                    </div>
                                                </td>
                                                <td>
                                                @if ($u['etat'] == "desactive")
                                                    <span class="btn btn-outline-warning">{{ $u['etat'] }}</span>
                                                @endif
                                                @if ($u['etat'] == "active")
                                                    <span class="btn btn-outline-success">{{ $u['etat'] }}</span>
                                                @endif
                                                @if ($u['etat'] == "bloque")
                                                      <span class="btn btn-outline-danger">{{ $u['etat'] }}</span>
                                                @endif
                                                @if ($u['etat'] == "inactive")
                                                    <span class="btn btn-outline-info">{{ $u['etat'] }}</span>
                                                @endif
                                                </td>
                                                <!-- $nb_annonce['id_u'] = $u['id']-->
                                                <td align="center"> {{ $nb_annonce["$i"] }} </td>
                                                <td>{{ $u['phone'] }}</td>
                                                <td>{{ $u['ville'] }}</td>
                                                <td>{{ $u['created_at'] }}</td>

                                                <?php $i++ ?>

                                                <!--buttons -->
                                                <td>
                                                <div>
                                                    <a href="{{route('admin_user.display')}}?u={{ $u['id'] }}" class="btn btn-primary btn-sm" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                        </svg>
                                                    </a>
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
                                                    <a href="{{ route('admin_user.delete') }}?u={{ $u['id'] }}" class="btn btn-warning btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');"  >
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
                <!-- END ROW -->

@endsection

