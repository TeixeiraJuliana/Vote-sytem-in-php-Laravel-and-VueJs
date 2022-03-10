@extends('layouts.app')




   <div class="container m-flx-g">
       <div  id="m-cont-form-theme" >
        <div class="teste" >
           <h1>Formulário</h1>
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
                    <label for="title">Título</label>
                    <input type="text" name="description">
                </div>
                <button type="submit">Cadastrar</button>
            </form>
            @endif
           </div>
       </div>
   </div>


