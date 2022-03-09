<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/style/base/reset.css">
    <link rel="stylesheet" href="./assets/style/module/general.css">
    <link rel="stylesheet" href="./assets/style/base/reset.css">
    <link rel="stylesheet" href="./assets/style/base/reset.css">

    <title>Document</title>
</head>
<body>
<div id="m-theme-table">
    <a href="{{ url('/temas/novoTema')}}">Criar novo emas de votações</a>
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
                <a href="temas/{{ $tema->id }}/editar">Editar</a>
                <a href="/temas/excluir"><img src="./assets/img/trash.png" alt=""></a>
                <a href="/temas/excluir'"><img src="./assets/img/pesquisar-arquivo.png" alt=""></a>
            </div>
        </div>
    </div>
    @endforeach
</div>

</body>
<style>
    #m-theme-table{
        width: 100%;
        height: 100%;
        background-color: white;
        display: flex;
        flex-direction: column;
        text-align: center;
        padding: 20px 50px;
    }
    #m-table-theme-heading,
    #m-theme-table-rows,
    #m-theme-table-row,
    #m-icons-up-del{
        display: flex;
    }
    #m-table-theme-heading{
        justify-content: space-between;
        text-align: center;
    }

    #m-theme-table-row div,
    #m-table-theme-heading div{
        width: 100%;
        padding: 0px 15px;
        align-items: center;
    }
    #m-theme-table-row {
        height: 60px;
        justify-content: center;
        align-items: flex-end;
        width: 100%;



    }
    #m-icons-up-del{
        width: 100%;
        display: flex;
        justify-content: space-around;

    }
    #m-icons-up-del img{


        max-width: 25px;

    }
    button{
        background: transparent;
        border: none;
    }




/*

                <a href="{{url('/temas/{{$tema->id}}/editar')}}"><img src="./assets/img/update.png" alt=""></a>

*/
</style>

</html>


