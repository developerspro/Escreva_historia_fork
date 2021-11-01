<!DOCTYPE html>
<html lang="en">
<head>

    <?php
        require_once "./Dao/Usuario.php";
        session_start();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/stylePerfil.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
</head>
<body>
<?php
  $usuario = new usuario();
  if (isset($_POST['email']) && isset($_POST['senha'])) {
    $credenciais['email'] = $_POST['email'];
    $credenciais['senha'] = $_POST['senha'];
     $dados = $usuario->perfil($credenciais);
      $_SESSION['seguidor'] = $dados['qntdseguidor'];

  }
?>


<?php
    var_dump($_SESSION);
    var_dump($credenciais);
    var_dump($dados);

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
                    <a class="nav-link" href="./perfil.php">Sair</a> 
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
          <strong><?php echo $_SESSION['seguidor']; ?></strong>
        </li>
      </ul>

      <div class="actions">
        <button>Follow</button>
      </div>
    </div>
  </div>

  <div class="wrapper-content content">
    <aside class="profile">
      <img src="./imgs/avatar.svg" alt="Batman" class="avatar">
      <h1>Batman</h1>
      <span>@batman</span>
      <p>Batman is a fictional character, a superhero from the American comic book published by DC Comics.</p>
  
</body>
</html>