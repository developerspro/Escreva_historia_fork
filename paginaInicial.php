<?php

  require_once "./Dao/Usuario.php";
  $db = new Usuario;
  $dados = $db->publicacoesUsuarios();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escreva sua história - Crie sua conta!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/estiloPaginaInicial.css">
    <link rel="stylesheet" href="./style/bootstrap/css.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    
    
</head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

      <a class="navbar-brand" href="paginaInicial.php">Inicio</a> <!-- Redirecionando a pagina inicio.php -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Quem somos?<span class="sr-only"></span></a> <!-- Redirecionando a pagina de criação de conta -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./cadastro.php">Cadastrar</a> <!-- redirecionando a pagina de login -->
          </li>
      </div>
    </nav>

    <div class="primeira-divisao">
        
            <div class="header">
              <h1>Chania</h1>
            </div>

            <div class="colunaEsquerda">
                SUPER TESTE
            </div>

            <div class="colunaCentro">
              <section class="gallery">

                    <div class="container">
                        <div class="row align-items-start">

                            <?php foreach ($dados as $linha => $campo):?>
                                <div class="col" >
                                  <div class="postagem">
                                  
                                            <img src="<?php echo $campo['capa']; ?>" alt="modelo 1">

                                            <p class="gallery-title"><?php echo $campo['artigo']; ?> </p>

                                            <p class="gallery-text">COD: <?php echo $campo['data']; ?></p>

                                            <input type="hidden" name="codigo_lanche" value="<?php echo $campo['Id']; ?>">

                                                                
                                  </div>
                                </div>
                                <?php endforeach; ?>
                        </div>
                    </div>
              </section>
            </div>

            <div class="colunaDireita">
                 ULTRA TESTE
            </div>
    </div>

    

    <div class="rodape">
        Teste


    </div>



        </body>
</html>


























     <!-- <main> 
            <div id="content-section">

                <div id="conteudo-1">
                  SUPER TESTE
                </div>

                <div id="conteudo-2">

                    <div id="conteudo-2-1">
                      HIPER TESTE
                    </div>

                    <div id="conteudo-2-2">
                       ULTRA TESTE
                      </div>
                </div>
            </div>

            <div id="rodape">TESTE RODA</div>
       
      </main> -->

