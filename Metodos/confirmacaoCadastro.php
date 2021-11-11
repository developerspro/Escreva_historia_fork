<?php

//efetua o cadastro do usuario no banco de dados
 require_once("../Dao/Usuario.php");
 
 
 $db = new Usuario();

 $credenciais['email'] = $_POST['email'];
 $credenciais['senha'] = $_POST['senha'];
 $credenciais['nomeUsuario'] = $_POST['nomeusuario'];
 $credenciais['nome'] = $_POST['nome'];

 
 if($db->cadastrar($credenciais)){
    header('Location: ..Paginnas/paginaInicial.php');
    
 }
 else{

   header("Location: index.php");
}

?>