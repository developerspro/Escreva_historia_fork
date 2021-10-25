<?php

// Verifica se o usuario possui Login no banco de dados
session_start();
require_once "../Dao/Usuario.php";

$db = new Usuario();

if (isset($_POST['email']) && isset($_POST['senha'])) {
   $credenciais['email'] = $_POST['email'];
   $credenciais['senha'] = $_POST['senha'];
   if ($db->login($credenciais) == true) {
      $dados = $db->login($credenciais);
      $_SESSION['username'] = $dados['nome_usuario'];
      $_SESSION['email'] = $dados['email'];
      $_SESSION['nome'] = $dados['nome'];
      header('Location: ../paginaInicial.php');
   }
   else {
      header('Location: ../login.php');
   }
}else {
   header('Location: ../login.php');
}

?>