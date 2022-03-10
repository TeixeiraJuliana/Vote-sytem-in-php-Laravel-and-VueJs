@extends('layouts.app')

@section('content')
<div class="container m-flx-g ">
       <div class="m-cont-form-theme m-flx-g" >
            <h1>Cadastre sua pesquisa</h1>
            @if ( Request::is('*/editar'))
            <form action="/temas/aditado/{{$theme->id}}" method="post">
                @csrf
                <div>
                    <label for="id">id tema</label>
                    <input type="number" name="id"  >
                </div>
                <div>
                    <label for="id-theme">id user</label>
                    <input type="number" name="user-id" value="$theme->user-id">
                </div>
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
        @else
            <form action="{{ url('/temas/criarTema') }}" method="POST">
                @csrf
                <div>
                    <label for="id">id tema</label>
                    <input type="number" name="id">
                </div>
                <div>
                    <label for="id-theme">id user</label>
                    <input type="number" name="user-id">
                </div>
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
            @endif
       </div>
   </div>
@endsection
