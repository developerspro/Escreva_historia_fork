<?php

 require_once("../Dao/Usuario.php");
 
 $db = new Usuario();

 $credenciais['email'] = $_POST['email'];
 $credenciais['senha'] = $_POST['senha'];

 
 if($db->cadastrar($credenciais)){
    echo "Inserção ok";
 }
 else{

    echo"Inserção Fail";
}

?>