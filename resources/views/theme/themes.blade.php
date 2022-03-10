@extends('layouts.app')

@section('content')
<div class="container">
<div id="m-theme-table">

    <h1>Temas de cadastrados para votação</h1>
    <div>
        <div id="m-table-theme-heading">
            <div>Titulo</div>
            <div>descrição</div>
            <div>Data de criação</div>
            <div>Data de finalização</div>
            <div>Ações</div>
        </div>
    </div>
    @foreach ($themes  as $tema)
    <div  id="m-theme-table-rows">
        <div  id="m-theme-table-row">
            <div>{{$tema->title}}</div>
            <div>{{$tema->description}}</div>
            <div>{{$tema->created_at}}</div>
            <div>{{$tema->created_at}}</div>
            <div id="m-icons-up-del">
                <a href="">Editar</a>
                <div></div>
                <div>
                    <form action="temas/{{ $tema->id }}" method="post">
                        @csrf
                        @method('delete')
                        <a href=""><img src="./assets/img/trash.png" alt=""></a>
                    </form>
                </div>
                opções
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
@endsection







