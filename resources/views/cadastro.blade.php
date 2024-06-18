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
    <form class="form" style="margin-top: 100px" action="/cadastrar" method="POST">
        <h6>Cadastre-se na plataforma</h6>
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <input name="nome" class="input" placeholder="Nome">
        <input name="email" class="input" placeholder="Email">
        <input name="senha" class="input" placeholder="Senha" type="password">
        <input class="input" placeholder="Repita a senha" type="password">
        <button class="button" type="submit" style="width: 100%; margin-bottom: 16px">
            Cadastrar
        </button>
        <a href="/entrar">Já tem uma conta? Entrar.</a>
    </form>
</body>
</html>