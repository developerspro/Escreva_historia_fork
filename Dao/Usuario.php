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
                session_start();
                $_SESSION['email']=$dados['email'];
                $_SESSION['senha']=$dados['senha'];
                $_SESSION['nome']=$dados['nome'];
                return true;
                
            }else {
                return false;
            }
        }
        

     
        public function login($dados)
        { 
        
            $sql = "select * from usuario where email=:email and senha=:senha"; 
            $resultado = $this->conn->prepare($sql); 
            $resultado->bindParam(':email', $dados['email']);
            $resultado->bindParam(':senha', $dados['senha']);
            $resultado->execute();
            $dados = $resultado->fetch(PDO::FETCH_ASSOC);
            if ($dados) {
                 return $dados;
            } else {
                return false;
            }
        } 
       

    }


?>