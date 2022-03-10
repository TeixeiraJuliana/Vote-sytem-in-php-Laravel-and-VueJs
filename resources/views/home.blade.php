@extends('layouts.app')

@section('content')

<div class="card-header">{{ __('Dashboard') }}</div>

<div class="card-body">
    <App></App>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <h1>Seja Bem vindo</h1>
    <a href="{{ url('temas')}}">Temas de votações</a>
</div>

@endsection
