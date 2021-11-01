<?php 

  require_once './Dao/paginacao.php';
  $pg = new Paginacao;

  $pag = (isset($_GET['pagina']))?$_GET['pagina'] : 1;

  $dados = $pg->paginar($pag);
  session_start()
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escreva sua história</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/bootstrap/css/">
    
</head>
<body>
<div class="container-fluid" position="fixed">
    <?php if(isset($_SESSION['id'])) { ?>
          
          <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
            
            <a class="navbar-brand ps-4" href="paginaInicial.php">Inicio</a>

            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
              <ul class="navbar-nav mr-auto">

                
                
                <li class="nav-item">
                  <a class="nav-link" href="#">Escreva sua História!</a> 
                </li>
            </div>

            <div class="actions">
              <a class="nav-link" href="./perfil.php"><?php echo $_SESSION['nome'];?></a> 
            </div>
            <img src="./imgs/avatar.svg" alt="Logo Twitter" class="icon me-4">

          </nav>
    <?php }else{ ?>
          <div class="container-fluid" position="fixed">
              <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                
                <a class="navbar-brand ps-4" href="paginaInicial.php">Inicio</a>

                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                  <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Quem somos?<span class="sr-only"></span></a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link" href="./cadastro.php">Cadastre-se</a> 
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="./login.php">Logar</a> 
                    </li>
                </div>
              </nav>
      <?php } ?>

  <!-- DIVS E INPUTS REFERENTE AS IMAGENS DA PAGINA INDEX.PHP (Responsividade)-->  
  <div class="container-xl mt-4">
  <section class="galeria">
      <img src="imgs/1e.png" class="img-fluid" alt="...">
      <img src="imgs/2e.png" class="img-fluid" alt="...">
      <img src="imgs/3e.png" class="img-fluid" alt="...">
      <img src="imgs/4e.png" class="img-fluid" alt="...">
      <img src="imgs/5e.png" class="img-fluid" alt="...">
  </section>
    </div>

<div class="footer">
      <p>Escreva sua história &copy; &nbsp;2021</p>
</div>



</div>




</body>
</html>