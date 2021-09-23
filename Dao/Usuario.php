<?php
    
    require_once("Conexao.php");
    class Usuario extends Conexao{
        
        
        // função que realiza o cadastro no banco
        public function cadastrar($dados)
         { 
            $sql = "insert into usuario(email, senha) values(:email, :senha)";
            $resultado = $this->conn->prepare($sql);
            $resultado->bindParam(':email', $dados['email']);
            $resultado->bindParam(':senha', $dados['senha']);
            $retorno = $resultado->execute();
            if(isset($retorno)) {
                return true;
            }else {
                return false;
            }
        }

     
        public function login($dados)
        { 
            $this->sql = "select * from usuario where email=:usuario and senha=:senha"; 
            $resultado = $this->conn->prepare($this->sql); 
            $resultado->bindParam(':usuario',$dados['email']);
            $resultado->bindParam(':senha',$dados['senha']);
            $resultado->execute();
            $dados = $resultado->fetch(PDO::FETCH_ASSOC);
            if ($dados) {
                return true;
            } else {
                return false;
                }
        } 


}

?>