<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escreva sua história - Crie sua conta!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/styleCadastro.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    
    
</head>

  <body>

  <div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

      <a class="navbar-brand ps-4" href="./paginaInicial.php">Inicio</a> <!-- Redirecionando a pagina inicio.php -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">

            <span class="navbar-toggler-icon"></span>

        </button>

      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Quem somos?<span class="sr-only"></span></a> <!-- Redirecionando a pagina de criação de conta -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./login.php">Logue já!</a> <!-- redirecionando a pagina de login -->
          </li>
      </div>
    </nav>

    <div class = "IdBody">

    <div id="login-container">

      <h1>Cadastro</h1>

        <form action="./Metodos/confirmacaoCadastro.php" method="post">
<<<<<<< HEAD
          
          <label for="name">Nome Completo</label>   
          <input type="text" name="nome" id="name" placeholder="Digite seu nome completo" autocomplate="off" required="required" size="9" minlength="6" maxlength="30">
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" placeholder="Digite seu e-mail" autocomplate="off" required="required" size="9" minlength="10" maxlength="30">
          <label for="usuario">Nome de usuario</label>
          <input type="text" name="nomeusuario" id="usuario" placeholder="Insira seu nome de usuario" required="required" autocomplate="off" size="9" minlength="8" maxlength="30">
=======

        <!-- form atual -->
         <label for="email">E-mail</label>
          <input type="email" name="email" id="email" placeholder="Digite seu e-mail" autocomplate="off">
>>>>>>> fb2d618fa56de6d52d0576f0e444efcddb8b486c
          <label for="password">Senha</label>
          <input type="password" name="senha" id="password" placeholder="Digite a sua senha "required="required" size="9" minlength="8" maxlength="20">
          <a href="#" id="forgot-pass">Esqueceu a senha?</a>
          <input type="submit" value="Cadastrar">
          

        <!-- criei novos inputs, para acompanhar nosso banco mas não acompanha o background
        <label for="name">Nome Completo</label>
          <input type="text" name="nome" id="name" placeholder="Digite seu nome completo" autocomplate="off" required="required" size="9" minlength="6" maxlength="30">
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" placeholder="Digite seu e-mail" autocomplate="off" required="required" size="9" minlength="10" maxlength="30">
          <label for="usuario">Nome de usuario</label>
          <input type="text" name="nomeusuario" id="usuario" placeholder="Insira seu nome de usuario" required="required" autocomplate="off" size="9" minlength="8" maxlength="30">
          <label for="password">Senha</label>
          <input type="password" name="senha" id="password" placeholder="Digite a sua senha "required="required" size="9" minlength="8" maxlength="20">
          <a href="#" id="forgot-pass">Esqueceu a senha?</a>
          <input type="submit" value="Cadastrar">
        -->
      </form>

       <div id = "registe-container">

          <p>Ainda não tem uma conta?</p>
          <a href="cadastro.php">Registar</a>

        </div>
    </div>
    

    
    
  
  </div>
            
  </body>
</html>

          <label for="name">Nome Completo</label>   
          <input type="text" name="nome" id="name" placeholder="Digite seu nome completo" autocomplate="off" required="required" size="9" minlength="6" maxlength="30">
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" placeholder="Digite seu e-mail" autocomplate="off" required="required" size="9" minlength="10" maxlength="30">
          <label for="usuario">Nome de usuario</label>
          <input type="text" name="nomeusuario" id="usuario" placeholder="Insira seu nome de usuario" required="required" autocomplate="off" size="9" minlength="8" maxlength="30">
          <label for="password">Senha</label>
          <input type="password" name="senha" id="password" placeholder="Digite a sua senha "required="required" size="9" minlength="8" maxlength="20">
          <a href="#" id="forgot-pass">Esqueceu a senha?</a>
          <input type="submit" value="Cadastrar">