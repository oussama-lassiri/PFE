@extends('admin_dir.theme')
@section('title admin','Gestion Annonce')
@section('style admin')
<style>

    .blur img {
        -webkit-filter: blur(5px);
        filter: blur(5px);
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
        border-top: 14px solid rgba(82, 180, 219, 0.02);
        border-radius:11px ;

    }
    .tag {
        background: rgba(0, 0, 0, 0.99);
        border-radius: 50px;
        font-size: 12px;
        margin: 0;
        color: #fff;
        padding: 2px 10px;
        text-transform: uppercase;
        cursor: pointer;
    }
    .tag-teal {
        text-align: center;
        background-color: #47bcd4;
    }
    .tag-purple {
        text-align: center;
        background-color: #5e76bf;
    }
    .tag-pink {
        text-align: center;
        background-color: #cd5b9f;
    }

    .tools {
         padding: 35px;
    }


</style>
@endsection

@section('page','Espace annonce ')

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

        <?php $i= 0; ?>
        @foreach($annonce as $item)
        <div class="col-xl-4">
            <div class="card m-b-30 ">
                @if($item['bein_type'] == "immobilier")
                    <span class="tag tag-teal "> {{ $bein_category["$i"] }} </span>
                @endif
                @if ($item['bein_type'] == "terrain")
                    <span class="tag tag-purple"> {{ $bein_category["$i"] }} </span>
                @endif
                @if($item['bein_type'] == "service")
                    <span class="tag tag-pink"> {{ $bein_category["$i"] }} </span>
                @endif

                    @if($item['etat'] == "active")
                        <div class="card-header ">
                            <img src="\uploads\{{ $item['images_path'] }}" alt="bien" />
                        </div>
                    @else
                       <div class="card-header blur">
                           <img src="\uploads\{{ $item['images_path'] }}" alt="bien" />
                       </div>
                    @endif

                    <div class="card-body1">
                        <h4>
                            {{ $item['titre'] }}
                        </h4>
                        <ul class="list-group list-group-flush list-group-horizontal-xxl">
                            <li class="list-group-item"><span class="btn btn-outline-secondary rounded-pill"> {{ $item['transaction'] }}</span></li>
                            <li class="list-group-item"><b>Propriétaire: </b>  {{ $user["$i"] }}</li>
                            <li class="list-group-item"><b>Ville:  </b> {{ $item['ville'] }}</li>
                            <li class="list-group-item"><b>Prix:   </b> {{ $item['prix'] }} DH</li>
                            <li class="list-group-item"><b>Description:  </b> {{ $item['description'] }}</li>
                            <li class="list-group-item"><b>Etat:   </b> {{ $item['etat'] }}</li>
                        </ul>
                            <?php $i++ ?>

                            <div class="tools">
                                <a href="{{route('admin_annonce.display')}}?an={{ $item['id'] }}" class="btn btn-info " >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                    </svg>
                                </a>
                                <a href="{{route('admin_annonce.gestion')}}?annonce={{ $item['id'] }}" class="btn btn-warning " data-toggle="tooltip"  title="Modifier">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                    </svg>
                                </a>
                                <a href="{{ route('second_page.destroy_bien') }}?annonce={{ $item['id']}}"  onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet annonce ?');" class="btn btn-danger ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </a>
                                @if($item['etat'] == "active")
                                    <a href="{{ route('admin_annonce.etat') }}?a={{ $item['id'] }}" class="btn btn-primary " >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-window-dash" viewBox="0 0 16 16">
                                            <path d="M2.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1ZM4 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/>
                                            <path d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Z"/>
                                            <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-5.5 0a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Z"/>
                                        </svg>
                                    </a>
                                @else
                                    <a href="{{ route('admin_annonce.etat') }}?a={{ $item['id'] }}" class="btn btn-success " >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16">
                                            <path d="M2.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1ZM4 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/>
                                            <path d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Z"/>
                                            <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z"/>
                                        </svg>
                                    </a>
                                @endif
                            </div>

                    </div>
                </div>

            </div>

        @endforeach
    </div>
@endsection
