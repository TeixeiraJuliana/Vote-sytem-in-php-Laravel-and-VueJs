@extends('layouts.app')
@section('content')
<div class="container">
<div>
    <div class="m-dash-cont  m-flx-g">
        <div id="m-home-left">
            <h1>Seja Bem vindo</h1>
        </div>
        <div class="m-home-right m-flx-g" >
            <div id="m-home-rec">
                <h1 class="card-header">{{ __('Dashboard') }}</h1>
            </div>
            <div id="m-home-op" >
                <h1>Pesquisas mais acessadas</h1>
                <a href="{{ url('teste')}}">Home</a>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="../assets/style/module/general.css">
</div>
</div>
@endsection