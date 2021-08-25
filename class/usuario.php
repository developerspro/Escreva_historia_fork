<?php

    class Usuario extends Sql{

        // função que realiza o cadastro no banco
        public function cadastrar($usuario, $nome, $senha)
         { 
            $sql = "insert into usuarios values ('$usuario', '$nome', '$senha')";
            $resultado = $this->dao->prepare($sql);
            $retorno = $resultado->execute();
            if(isset($retorno)) {
                return true;
            }else {
                return false;
            }
        }

     
        public function login($usuario, $senha)
        { 
            $this->sql = "select * from usuarios where tUsuario=:usuario and tSenha=:senha"; 
            $resultado = $this->dao->prepare($this->sql); 
            $resultado->bindParam(':usuario', $usuario);
            $resultado->bindParam(':senha', $senha);
            $resultado->execute();
            $dados = $resultado->fetch(PDO::FETCH_ASSOC);
            if ($dados) {
                echo("teste");
                header(""); /* redirecionar a pagina inicio, com as histórias, caso logado com sucesso.*/
                return true;
            } else {
                return false;
                }
        } 


}

?>