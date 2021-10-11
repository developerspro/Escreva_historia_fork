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
                $_SESSION['email']=$dados['email'];
                $_SESSION['senha']=$dados['senha'];
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
                 return true;
            } else {
    
                return false;
            }
        } 

        public function publicacoesUsuarios()
        {

            session_start();
            $sql = "select * from publicacoes";
            $resultado = $this->conn->prepare($sql);
            $resultado->execute();
            $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);
            if($dados){
                return $dados;
            }else{
                return false;
            }
           
        }
       

    }


?>