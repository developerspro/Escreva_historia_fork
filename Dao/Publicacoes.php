<?php
    require_once("Usuario.php");
    

    class Publicacoes extends Usuario{


        public function postagem(){    

            $sqlSelect = "SELECT 'id', 'titulo', 'capa', 'artigo', 'data', 'hora' FROM publicacoes";
            $resultado = $this->conn->prepare($sqlSelect);
            $resultado->execute();
            $postagens = $resultado->fetchAll(PDO::FETCH_ASSOC);
            if (isset($postagens)) {
                return $postagens;
            }else{
                echo "Error Banco";
            }

        }

        public function paginar(){

            $pag = (isset($_GET['pagina']))?$_GET['pagina'] : 1;

            $todos = $this->postagem();
            $limitadorPostagens = '4';
            
            $totalRegistros = count($todos);
            
            $totalPaginas = ceil($totalRegistros/$limitadorPostagens);
            $_POST['totalPaginas'] = $totalPaginas;

            $inicio = ($limitadorPostagens*$pag)-$limitadorPostagens;

            $final = $this->conn->prepare("SELECT * FROM publicacoes LIMIT :inicio, :limite");
            $final->bindParam(":inicio", $inicio, PDO::PARAM_INT);
            $final->bindParam(":limite", $limitadorPostagens, PDO::PARAM_INT);
            $final->execute();
            $dados = $final->fetchAll(PDO::FETCH_ASSOC);

            return $dados;
        }
    }
?>