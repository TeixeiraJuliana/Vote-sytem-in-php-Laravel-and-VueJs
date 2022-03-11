
    <link rel="stylesheet" href="../assets/style/base/reset.css">
    <link rel="stylesheet" href="../assets/style/module/general.css">
    <link rel="stylesheet" href="../assets/style/theme/general-themes.css">
    <link rel="stylesheet" href="../assets/style/leyout/text.css">

@if ( Request::is('*/edit'))
    <div class="container m-flx-g ">
        <div class="m-cont-form-theme m-flx-g" >
            <form action="/temas/edit/{{$theme->id}}" method="post">
            <h1>Atualize sua pesquisa</h1>
                @csrf
                <div class="m-item-form">
                    <label for="title">Título</label>
                    <input type="text" name="title" value="$theme->title">
                </div>
                <div class="m-item-form">
                    <label for="title">Descrição</label>
                    <textarea type="textarea" name="description" value="$theme->description"  id="" cols="30" rows="10"></textarea>
                </div>
                <button class="btn btn-form" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
        @else
    <div class="container m-flx-g ">
        <div class="m-cont-form-theme m-flx-g" >
            <h1>Cadastre sua pesquisa</h1>
            <form action="{{ url('/temas/criarTema') }}" method="POST">
                @csrf
                <div>
                    <label for="title">Título</label>
                    <input type="text" name="title">
                </div>
                <div>
                    <label for="title">Descrição</label>
                    <textarea  id="m-inp-desc" type="textearea" name="description"  id="" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <label for="title">Opções</label>
                    <input type="text" name="">
                </div>
                <button class="btn btn-form" type="submit">Alterar</button>
            </form>
            <App><App>
        </div>
    </div>
@endif

