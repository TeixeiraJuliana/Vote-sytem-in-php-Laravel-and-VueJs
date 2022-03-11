@extends('layouts.app')
@section('content')
<div class="container">
<div>
    <div class="m-dash-cont  m-flx-g">
        <div id="m-home-left">
        <h1>Pesquisas mais acessadas</h1>
        </div>
        <div class="m-home-right m-flx-g" >
            <div id="m-home-rec">
                <div class="card-header">{{ __('Dashboard') }}</div>
            </div>
            <div id="m-home-op" >
                <h1>Seja Bem vindo</h1>
                <a href="{{ url('temas')}}">Temas de votações</a>
                <a href="{{ url('/temas/novoTema')}}">Criar Tema</a>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="../assets/style/module/general.css">
</div>
</div>
@endsection
