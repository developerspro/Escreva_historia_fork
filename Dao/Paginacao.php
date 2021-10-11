<?php

    require_once("Conexao.php");

    class Paginacao extends Conexao{

        public function paginar($pag){

            $sqlSelect = "SELECT 'id_usuario_fk', 'titulo', 'capa', 'artigo', 'data', 'hora' FROM publicacoes";
            $resultado = $this->conn->prepare($sqlSelect);
            $resultado->execute();
            $todos = $resultado->fetchAll();


            $limitadorPostagens = '4';

            $totalRegistros = count($todos);
            $totalPaginas = ceil($totalRegistros/$limitadorPostagens);

            $inicio = ($limitadorPostagens*$pag)-$limitadorPostagens;

            $final = $this->conn->prepare("SELECT * FROM publicacoes LIMIT :inicio, :limite");
            $final->bindParam(":inicio", $inicio, PDO::PARAM_INT);
            $final->bindParam(":limite", $limitadorPostagens, PDO::PARAM_INT);
            $final->execute();
            $dados = $final->fetchAll(PDO::FETCH_ASSOC);

            return $dados;

                
            

            
        

            
  {
     
  }

            






            
        }


    }



?>