@extends('layout')
@section('content')
        <header class="main_blog_header">
            <h1 class="icon-blog">Nossas Notícias</h1>
            <p>Aqui você encontra todas as nossas notícias</p>
        </header>

        @foreach($noticias as $noticia)
            <article>
                <a href="{{route('show', [$noticia->id])}}">
                    <img src="{{asset("$noticia->foto")}}" alt="primeiro post" title="primeiro post">
                </a>
                <h2><a href="{{route('show', [$noticia->id])}}" class="title">{{$noticia->titulo}}</a></h2>
                <p><a href="{{route('show', [$noticia->id])}}" class="category">{{$noticia->categoria}}</a></p>
                <h3><a href="{{route('show', [$noticia->id])}}" class="title">{{$noticia->chamada}}</a></h3>
                <a href="{{route('show', [$noticia->id])}}" class="btn-noticia">Acessar</a>
            </article>
        @endforeach

@endsection
