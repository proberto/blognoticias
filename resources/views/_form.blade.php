@csrf
<div class="form-group">
    <label for="titulo">{{ __('Titulo') }}</label>

    <div>
        <input id="titulo" type="text" class="form-control" name="titulo" value="{{ $noticia->titulo }}" required autofocus>
    </div>
</div>

<div class="form-group">
    <label for="categoria">{{ __('Categoria') }}</label>

    <div>
        <input id="categoria" type="text" class="form-control" name="categoria" value="{{ $noticia->categoria }}">
    </div>
</div>

<div class="form-group">
    <label for="chamada">{{ __('Chamada') }}</label>

    <div>
        <textarea id="chamada" class="form-control" name="chamada">{{ $noticia->chamada }}</textarea>
    </div>
</div>


<div class="form-group">
    <label for="descricao">{{ __('Descrição') }}</label>

    <div>
        <textarea id="descricao" class="form-control" name="descricao" html_entity_decode="true">{{ $noticia->descricao }}</textarea>
    </div>
</div>

<div class="form-group">
    <label for="foto">{{ __('Foto') }}</label>

    <div>
        <input id="foto" type="file" class="form-control" name="foto" accept="imagens/*" >
    </div>
</div>
