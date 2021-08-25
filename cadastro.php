<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escreva sua história - Crie sua conta!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    
    
</head>
  <body class = "IdBody">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="../../home/index.php">Inicio</a> <!-- Redirecionando a pagina inicio.php -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Quem somos?<span class="sr-only"></span></a> <!-- Redirecionando a pagina de criação de conta -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../login/index.php">Logue já!</a> <!-- redirecionando a pagina de login -->
          </li>
      </div>
    </nav>

        <div id="teste">
        <form method="post" name="tLogin" id="cDados" action="login.php">
            <fieldset id="loginusuario"><legend>identificação do usuário</legend>
                <br><label for="cUsuario">Nome de usuario:<input type="text" name="tUsuario" id="cUsuario" size="25" maxlength="40" placeholder="insira seu nome de usuario"><br>
                <fieldset id="teste"><label for="cNome">Nome:</label> <input type="text" name="tNome" id="cNome" size="25" maxlength="40" placeholder="Insira seu nome completo" class="form"><br>
                <label for="cSenha">Senha:</label> <input type="password" name="tSenha" id="cSenha" size="25" maxlength="15" placeholder="sua senha"><br>
            <input type="submit" value="Cadastrar">
            </fieldset>
        </div>
  </body>
</html>