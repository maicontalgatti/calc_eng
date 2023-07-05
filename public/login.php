<?php
session_start();

// Função para redirecionar o usuário para a página de login
function redirect($url) {
  header("Location: $url");
  exit();
}

// Verifica se a sessão já foi iniciada
if (!isset($_SESSION['initiated'])) {
  session_regenerate_id(); // Gera um novo ID de sessão para evitar ataques de fixação de sessão
  $_SESSION['initiated'] = true;
}

// Verifica se o usuário já está logado
if (isset($_SESSION['username'])) {
  redirect('dashboard.php');  
}

// Validação do formulário de login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
  $password = $_POST['password'];

  // Realize as verificações de segurança necessárias, como proteção contra SQL Injection, XSS, CSRF etc.

  // Exemplo de validação de autenticação básica
  if ($username === 'usuario' && $password === 'senha') {
    // Autenticação bem-sucedida, redireciona para a página principal do sistema
    $_SESSION['username'] = $username;
    redirect('dashboard.php');  
  } else {
    // Exemplo de tratamento de erro para falha na autenticação
    $error_message = 'Usuário ou senha incorretos.';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-form {
      width: 400px;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .login-form h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .login-form .form-control {
      border-radius: 0;
    }
    .login-form .btn {
      border-radius: 0;
      font-weight: 600;
      background-color: #6c757d;
      border-color: #6c757d;
    }
    .login-form .btn:hover {
      background-color: #5a6268;
      border-color: #5a6268;
    }
  </style>
</head>
<body>
  <div class="login-form">
    <h2>Login</h2>
    <?php if (isset($error_message)): ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $error_message; ?>
      </div>
    <?php endif; ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="mb-3">
        <label for="username" class="form-label">Usuário</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Digite seu usuário" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Entrar</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
