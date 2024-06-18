<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/autenticacao.css?v=').time() }}" rel="stylesheet">
    <link href="{{ asset('css/basico.css?v=').time() }}" rel="stylesheet">
    <title>Livros</title>
</head>
<body>
    <form class="form" style="margin-top: 100px" action="/entrar" method="POST">
        <h6>Entrar na plataforma</h6>
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <input name="email" class="input" placeholder="Email">
        <input name="senha" class="input" placeholder="Senha" type="password">
        <button class="button" type="submit" style="width: 100%; margin-bottom: 16px">
            Entrar
        </button>
        <a href="/cadastrar">Não tem uma conta? Cadastre-se.</a>
    </form>
</body>
</html>