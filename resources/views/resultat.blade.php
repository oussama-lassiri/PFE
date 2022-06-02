@extends('nav')

@section('style')
    <link rel="stylesheet" href="\css\second_page\resultat_style.css">
@endsection

@section('content')
    @if (isset($res))
        @if ($res == "fail")
        <div class="container big animate__animated animate__swing atte">
            <h1>Attention!</h1>
            <h3>{{ $msg }}</h3>
        @endif
        @if ($res == "success")
        <div class="container big animate__animated animate__swing">
            <h1>Félicitation!</h1>
            <h3 class="succ">{{ $msg }}</h3>
        @endif
        <a href="{{ route('welcome') }}" class="button-64" role="button"><span class="text">Page d'accueil</span></a>
    <a href="{{ route('user_space', ['id' => Auth::user()->id]) }}" class="button-64 second" role="button"><span class="text">Espace personnel</span></a>
    @else
    <div class="container big animate__animated animate__swing">
        <h1>Félicitation!</h1>
        <h3 class="succ">Votre annonce a été créée avec succès.</h3>
        <a href="{{ route('welcome') }}" class="button-64" role="button"><span class="text">Page d'accueil</span></a>
    <a href="{{ route('user_space', ['id' => Auth::user()->id]) }}" class="button-64 second" role="button"><span class="text">Espace personnel</span></a>
    @endif
    
</div>

@endsection
