  <?php
  
  require_once './Dao/Usuario.php';
  $usuario = new Usuario;
  session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/stylePerfil.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
</head>
<body>
  <?php $id =( $_SESSION['id']); 
        var_dump($id);
        $perfil = ($_SESSION['fotoPerfil']);
        var_dump($perfil);
        
       ?>

<div class="container-fluid">
  <?php if(isset($_SESSION['id'])) { ?>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
          
          <a class="navbar-brand ps-4" href="paginaInicial.php">Inicio</a>

          <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">

              <li class="nav-item active">
                <a class="nav-link" href="index.php">Quem somos?<span class="sr-only"></span></a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="./cadastro.php">Cadastrar</a> 
              </li>

              <li class="nav-item">
                <a class="nav-link" href="./Testes.php">Bem vindo - <?php echo $_SESSION['nome'];?></a> 
              </li>
              <div class="actions me-4">
                    <a class="nav-link" href="./Teste.php">Sair</a> 
              </div>
          </div>
        </nav>
  <?php }else{ ?>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
              
              <a class="navbar-brand ps-4" href="paginaInicial.php">Inicio</a>

              <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">

                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Quem somos?<span class="sr-only"></span></a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="./cadastro.php">Escreva sua História!</a> 
                  </li>
              </div>
              <div class="actions me-4">
                    <a class="nav-link" href="./Teste.php">Sair</a> 
              </div>
            </nav>
    <?php } ?>

  <div class="banner">
    <h1><img src="./imgs/teste2.png" alt=""></h1>
  </div>

  <div class="bar">
    <div class="content">
      <ul>
        <li class="active">
          <span>Publicacões</span>
          <strong>12</strong>
        </li>
        <li>
          <span>Comentários</span>
          <strong>18</strong>
        </li>
        <li>
          <span>Seguidores</span>
          <strong>32</strong>
        </li>
        <li>
          <span>Favorites</span>
          <strong>4</strong>
        </li>
      </ul>

      <div class="actions">
        <button>Follow</button>
      </div>
    </div>
  </div>

  <div class="wrapper-content content">
    <aside class="profile">
      <img src="<?php echo $_SESSION['fotoPerfil'];?>" alt="Batman" class="avatar">
      <h1>Batman</h1>
      <span>@batman</span>
      <p>Batman is a fictional character, a superhero from the American comic book published by DC Comics.</p>

    <form method="POST" enctype="multipart/form-data" action="./configuracaoUsuario.php"> 
    <label for="conteudo">Adicione uma foto de perfil</label>
    <input type="file" name="pic" accept="image/*">
    <button type="submit">Enviar imagem</button>

     <?php
 
  
  
    ?>
    
</body>
</html>