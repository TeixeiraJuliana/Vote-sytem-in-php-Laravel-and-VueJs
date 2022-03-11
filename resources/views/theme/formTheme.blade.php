@extends('layouts.app')

@section('content')
@if ( Request::is('*/edit'))
    <div class="container m-flx-g ">
        <div class="m-cont-form-theme m-flx-g" >
            <h1>Cadastre sua pesquisa</h1>
            <form action="/temas/edit/{{$theme->id}}" method="post">
                @csrf
                <div>
                    <label for="title">Título</label>
                    <input type="text" name="title" value="$theme->title">
                </div>
                <div>
                    <label for="title">Descrição</label>
                    <input type="text" name="description" value="$theme->description">
                </div>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
        @else
    <div class="container m-flx-g ">
        <div class="m-cont-form-theme m-flx-g" >
        <form action="{{ url('/temas/criarTema') }}" method="POST">
            @csrf
            <div>
                <label for="title">Título</label>
                <input type="text" name="title">
            </div>
            <div>
                <label for="title">Descrição</label>
                <input id="m-inp-desc" type="text" name="description">
            </div>
            <div>
                <label for="title">Opções</label>
                <input type="text" name="">
            </div>
            <button id="m-btn-form" type="submit">Cadastrar</button>
        </form>
    </div>
</div>
@endif
@endsection
