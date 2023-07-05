<?php
session_start();

// Função para redirecionar o usuário para a página de login
function redirect($url) {
  header("Location: $url");
  exit();
}

// Função para exibir mensagens de erro
function displayError($message) {
  $_SESSION['error_message'] = $message;
  redirect('index.php'); // Substitua 'index.php' pelo nome da página de login
}

// Validação do formulário de login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recupera os valores dos campos do formulário
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
  $password = $_POST['password']; // Não aplicamos filtragem aqui para evitar problemas com senhas seguras

  // Verificações de segurança adicionais
  // Exemplo de validação de autenticação básica
  if ($username === 'usuario' && $password === 'senha') {
    // Autenticação bem-sucedida, redireciona para a página principal do sistema
    $_SESSION['username'] = $username;  
    redirect('pagina-principal.php'); // Substitua 'pagina-principal.php' pelo nome da página principal do seu sistema
  } else {
    // Exemplo de tratamento de erro para falha na autenticação
    displayError('Usuário ou senha incorretos.'); // Exibe uma mensagem de erro na página de login
  }
}
?>
