<?php

//efetua o cadastro do usuario no banco de dados
 require_once("../Dao/Usuario.php");
 
 
 $db = new Usuario();

 $credenciais['email'] = $_POST['email'];
 $credenciais['senha'] = $_POST['senha'];

 
 if($db->cadastrar($credenciais)){
    header('Location: ../paginaInicial.php');
    
 }
 else{

   header("Location: index.php");
}

?>