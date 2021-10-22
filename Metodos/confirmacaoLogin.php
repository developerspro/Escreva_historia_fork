<?php

// Verifica se o usuario possui Login no banco de dados

require_once "../Dao/Usuario.php";

$db = new Usuario();

$credenciais['email'] = $_POST['email'];
$credenciais['senha'] = $_POST['senha'];

var_dump($credenciais);
 
if ($db->login($credenciais) == true) {

   header('Location: ../paginaInicialLogin.php');
   
}else {
   echo 'login error';
}
  
?>