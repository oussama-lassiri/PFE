@extends('admin_dir.theme')

@section('style admin')
<style>
    .div-blur{
        -webkit-filter: blur(5px);
        -moz-filter: blur(5px);
        -o-filter: blur(5px);
        -ms-filter: blur(5px);
        filter: blur(5px);
        width: 100px;
        height: 100px;
        background-color: #ccc;

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
        border-top: 14px solid #52B4DB ;
        border-radius:11px ;

    }
</style>
@endsection

@section('page','Espace annonce ')

@section('right content')
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

        <?php $i= 0; ?>
        @foreach($annonce as $item)
        <div class="col-xl-4">
            <div class="card m-b-30 ">
                <div class="card1 col-8">
                    @if($item['etat'] == "active")
                        <div class="card-header ">
                    @else
                       <div class="card-header div-blur">
                    @endif
                        <img src="\uploads\{{ $item['images_path'] }}" alt="bein" />
                    </div>
                    <div class="card-body1">
                        @if($item['bein_type'] == "immoblier")
                            <span class="tag tag-teal"> {{ $bein_category["$i"] }} </span>
                        @endif
                        @if ($item['bein_type'] == "terrain")
                            <span class="tag tag-purple"> {{ $bein_category["$i"] }} </span>
                        @endif
                        @if($item['bein_type'] == "service")
                            <span class="tag tag-pink"> {{ $bein_category["$i"] }} </span>
                        @endif

                        <h4>
                            {{ $item['titre'] }}
                        </h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $item['transaction'] }}</li>
                            <li class="list-group-item">Propriétaire: {{ $user["$i"] }}</li>
                            <li class="list-group-item">Ville:  {{ $item['ville'] }}</li>
                            <li class="list-group-item">Prix:   {{ $item['prix'] }} DH</li>
                            <li class="list-group-item">Etat:   {{ $item['etat'] }}</li>
                            <li class="list-group-item">Description:   {{ $item['description'] }}</li>
                        </ul>
                        <?php $i++ ?>
                        <div >
                            <div class="card-body d-flex justify-content-center">
                                <a href="{{route('second_page.edit')}}?annonce={{ $item['id'] }}" class="btn btn-success  float-end" data-toggle="tooltip"  title="Modifier">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </a>
                                <a href="#" class="btn btn-danger  float-start"  data-toggle="modal" data-target="#ModalDelete{{$item['id']}}"  title="Supprimer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </a>
                                @if ($item['etat'] == "desactive")
                                    <button class="btn btn-info " onclick="toggleText(1)">Activer</button>
                                @endif
                                @if ($item['etat'] == "active")
                                    <button class="btn btn-dark " onclick="toggleText(1)">Desactive</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
