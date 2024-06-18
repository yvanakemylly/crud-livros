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
  <form class="form" action="/criar-livro" method="POST" style="margin: -200px auto">
    <h6>Criar livro</h6>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <input name="titulo" class="input" placeholder="Titulo">
    <input name="subtitulo" class="input" placeholder="Sub-titulo">
    <input name="autor" class="input" placeholder="Autor">
    <input name="edicao" class="input" placeholder="Edição">
    <input name="editora" class="input" placeholder="Editora">
    <input name="ano_publicacao" class="input" placeholder="Ano de publicação">
    <div style="display: flex; justify-content: space-between; margin-bottom: 8px">
      <a type="submit" href="/livros" class="transparent-button">
        Voltar
      </a>
      <button type="submit" href="/criar-livro" class="button">
        Criar livro
      </button>
    </div>
  </form>
    
</body>
</html>