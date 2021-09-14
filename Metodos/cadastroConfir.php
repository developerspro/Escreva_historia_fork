<?php

 require_once("../Dao/Usuario.php");
 
 $db = new Usuario();

 $dados['email'] = $_POST['email'];
 $dados['senha'] = $_POST['senha'];

 
 if($db->cadastrar($dados)){
    echo "Inserção ok";
 }
 else{

    echo"Inserção Fail";
};

?>