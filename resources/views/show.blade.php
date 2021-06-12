@extends('layout')
@section('content')
    <div class="noticia-interna">
        <h1><strong>{{$noticia->titulo}}</strong> </h1>
        <p>
            <img src="{{ asset($noticia->foto) }}">
        </p>
        <p id="artigos">
            {!!$noticia->descricao!!}
        </p>
        <p class="category">
            Categoria: {{$noticia->categoria}}
        </p>

    </div>
@endsection
