<?php
session_start();

// Verifica se o usuário está logado
if (isset($_SESSION['username'])) {
  // Realize as ações necessárias para encerrar a sessão, como limpar as variáveis de sessão, cookies, etc.
  
  // Destrua todas as variáveis de sessão
  $_SESSION = array();
  
  // Exclua o cookie de sessão, se existir
  if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
  }
  
  // Destrua a sessão
  session_destroy();
}

// Redireciona para a página de login
header('Location: login.php');
exit();
?>
