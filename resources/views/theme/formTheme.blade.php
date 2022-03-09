
    <h1>Formulário</h1>



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

