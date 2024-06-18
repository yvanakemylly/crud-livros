<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/livros.css?v=').time() }}" rel="stylesheet">
    <link href="{{ asset('css/basico.css?v=').time() }}" rel="stylesheet">
    <title>Livros</title>
</head>
<body>
  <x-menu></x-menu>
    <form class="form" action="/editar-livro" method="POST" style="margin: -200px auto">
      <h6>Editar livro</h6>
      <input type='hidden' name='_token' value='{{ csrf_token() }}'>
      <input type='hidden' name='id' value='{{ $livro->id }}'>
      <input name="titulo" class="input" placeholder="Titulo" value="{{ $livro->titulo }}">
      <input name="subtitulo" class="input" placeholder="Sub-titulo" value="{{ $livro->subtitulo }}">
      <input name="autor" class="input" placeholder="Autor" value="{{ $livro->autor }}">
      <input name="edicao" class="input" placeholder="Edição" value="{{ $livro->edicao }}">
      <input name="editora" class="input" placeholder="Editora" value="{{ $livro->editora }}">
      <input name="ano_publicacao" class="input" placeholder="Ano de publicação" value="{{ $livro->ano_publicacao }}">
      <div style="display: flex; justify-content: space-between; margin-bottom: 8px">
        <a type="submit" href="/livros" class="transparent-button">
          Voltar
        </a>
        <button type="submit" class="button">
          Editar livro
        </button>
      </div>
    </form>


    
</body>
</html>