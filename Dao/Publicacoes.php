<?php
    require_once("Usuario.php");
    

    class Publicacoes extends Usuario{


        public function todasPostagens(){    

            $sqlSelect = "SELECT * FROM publicacao";
            $resultado = $this->conn->prepare($sqlSelect);
            $resultado->execute();
            $postagens = $resultado->fetchAll();
            if (isset($postagens)) {
                return $postagens;
            }else{
                echo "Error Banco";
            }

        }

        public function postagem($idPostagem){
            $sql = "SELECT * FROM publicacao WHERE id = :idPostagem";
            $resultado = $this->conn->prepare($sql);
            $resultado->bindParam(':idPostagem', $idPostagem);
            $resultado->execute();
            $dados = $resultado->fetchall();
            if (isset($dados)) {
                return $dados;
            }else {
                "nenhuma postagem encontrada";
            }

        }

        public function paginar(){

            $pag = (isset($_GET['pagina']))?$_GET['pagina'] : 1;

            $todos = $this->todasPostagens();
            $limitadorPostagens = '6';
            
            $totalRegistros = count($todos); //conta o total de postagens
            
            $totalPaginas = ceil($totalRegistros/$limitadorPostagens); //Divide o total de postagens pelo limitador
            $_POST['totalPaginas'] = $totalPaginas;

            $inicio = ($limitadorPostagens*$pag)-$limitadorPostagens;// Inicio que limita o select

            $final = $this->conn->prepare("SELECT * FROM publicacao LIMIT :inicio, :limite");
            $final->bindParam(":inicio", $inicio, PDO::PARAM_INT);
            $final->bindParam(":limite", $limitadorPostagens, PDO::PARAM_INT);
            $final->execute();
            $dados = $final->fetchAll(PDO::FETCH_ASSOC);

            return $dados;
        }
    }
?>