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
    <title>Escreva sua história - Crie sua conta!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./style/estiloPaginaInicial.css">
    <link rel="stylesheet" href="./style/bootstrap/css.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
</head>

  <body>

  <div class="container-fluid">
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
          <a class="nav-link" href="./login.php">Logar</a> 
        </li>
    </div>
  </nav>
              
    
    <div class="grid-container">
      <div class="header">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          </div>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./imgs/TesteCarousel.png" alt="Los Angeles" class="" style="width:100%">
            </div>
            <div class="carousel-item">
              <img src="./imgs/TesteCarousel2.png" alt="Chicago" class="" style="width:100%">
            </div>
            <div class="carousel-item">
              <img src="./imgs/TesteCarousel3.png" alt="New York" class="" style="width:100%">
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
          </div>
      </div>
      
      <div class="left" style="background-color:#aaa;">Column</div>

      <div class="middle" style="background-color:#bbb;">

        <?php foreach ($dados as $linha => $campo): ?>

          
            <div class="mx-auto " style="width: 700px">
              <div class="card mb-3 ">
                <img src="<?php echo $campo['capa']; ?>" class="card-img-top " alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $campo['titulo']; ?></h5>
                    <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted"><?php echo $campo['data']; ?></small></p>
                  </div>
              </div>
            </div>
          
          <?php endforeach; ?>
          <nav aria-label="Navegação de página exemplo">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Anterior</a>
              </li>
                <?php 
                  for($i = 0; $i <= $_POST['totalPaginas']; $i++){
                ?>
              <li class="page-item"><a class="page-link" href="paginaInicial.php?pagina=<?=$i?>"><?=$i?></a></li>
                  <?php
                    }
                  ?>
                <li class="page-item">
                  <a class="page-link" href="#">Próximo</a>
                </li>
            </ul>
          </nav>

          
        
        </div>  
      
      <div class="right" style="background-color:#ccc;">Column</div>
    </div>
      
      <div class="footer">
      <p>Footer</p>
      </div>
    </div>

  </body>
</div>
</html>
