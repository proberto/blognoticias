<!doctype html>
<html lang="pt-br" itemscope itemtype="https://schema.org/WebSite">
<head>
    <title>Blog de Noticias</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Site para teste do investidor10">
    <meta name="robots" content="index, folow">

    <link rel="canonical" href="https://pauloprogramador.com.br">


    <link href="{{asset('css/fonticon.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="{{asset('css/boot.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>

</head>
<body>
<header class="main_header">
    <div class="main_header_content">
        <a href="#" class="logo">
            <h1>LOGO</h1>
        </a>

        <nav class="main_header_content_menu">
            <ul>
                <li><a href="{{route('create')}}">Cadastrar Notícias</a></li>
                <li><a href="{{route('index')}}">Exibir Notícias</a></li>
                <li>
                    <div class="container">
                        <form class="searchbox" action="{{route('pesquisar')}}" method="post">
                            @csrf
                            <input class="search" type="text" name="buscar" placeholder="Buscar...">
                            <button class="btn-search icon-search" type="submit"></button>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>

        <nav class="main_header_content_menu_mobile">
            <ul>
                <li>
                    <span class="main_header_content_menu_mobile_obj icon-menu icon-notext"></span>
                    <ul class="main_header_content_menu_mobile_sub ds_none">
                        <li><a href="{{route('create')}}">Cadastrar Notícias</a></li>
                        <li><a href="{{route('index')}}">Exibir Notícias</a></li>
                        <li>
                            <div class="container">
                                <form class="searchbox" action="{{route('pesquisar')}}" method="post">
                                    @csrf
                                    <input class="search" type="text" name="buscar" placeholder="Buscar...">
                                    <button class="btn-search icon-search" type="submit"></button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
<section class="main_blog">
    @yield('content')
</section>

<footer class="main_footer_rights">
    <p>Todos os Direitos Reservados a Paulo Programador ®</p>
</footer>
<script src="{{asset('js/jquery-3.5.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/main.js')}}" type="text/javascript"></script>

</body>
</html>
