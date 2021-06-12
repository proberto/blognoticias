@extends('layout')
@section('content')
    <form method="post" action="{{route('store')}}" enctype="multipart/form-data">
        @include('_form')
        <div class="form-group">
            <div>
                <button type="submit" class="btn-cadastro">
                    {{ __('Enviar') }}
                </button>
            </div>
        </div>
    </form>
@endsection
