<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/livros.css?v=').time() }}" rel="stylesheet">
    <link href="{{ asset('css/basico.css?v=').time() }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/83b300201b.js" crossorigin="anonymous"></script>
    <title>Livros</title>
</head>
<body>
  <x-menu></x-menu>
  <div class="card" style="margin: -200px auto">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px">
      <h6>Meus livros</h6>
      <a href="/criar-livro" class="button">
        Adicionar livro
      </a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>Titulo</th>
          <th>Sub-titulo</th>
          <th>Autor</th>
          <th>Edição</th>
          <th>Editora</th>
          <th>Ano de publicação</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($livros as $livro)
          <tr>
            <td>{{ $livro->titulo }}</td>
            <td>{{ $livro->subtitulo }}</td>
            <td>{{ $livro->autor }}</td>
            <td>{{ $livro->edicao }}</td>
            <td>{{ $livro->editora }}</td>
            <td>{{ $livro->ano_publicacao }}</td>
            <td>
              <div style="display: flex; align-items: center; gap: 12px">
                <a href="editar-livro?id={{ $livro->id }}" class="transparent-button" style="margin-left: 4px;font-size: 14px">
                  <i class="fa-solid fa-pencil"></i>
                </a>
                <form action="excluir-livro" method="POST">
                  <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                  <input type="hidden" name="id" value="{{ $livro->id }}">
                  <button type="submit" class="transparent-button" style="font-size: 14px">
                    <i class="fa-solid fa-trash"></i>
                  </button>
                </form>
                
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </div>
</body>
</html>