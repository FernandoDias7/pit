<?php
// Conecta conexao.php (MySqli)
include('conexao.php');

// Verifica se o formulário de login foi enviado
if(isset($_POST['email']) || isset($_POST['senha'])) {

// Verifica se o campo de e-mail está vazio
  if(strlen($_POST['email']) == 0) {
     echo "Preencha seu e-mail";} 

// Sanitiza os dados do formulário para evitar SQL injection
  else if(strlen($_POST['senha']) == 0) {
    echo "Preencha sua senha";}
 

// Sanitiza os dados do formulário para evitar SQL injection
  else {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

// Monta a consulta SQL para verificar as credenciais de login
    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execucao do código SQL: " . $mysqli->error);

// Verifica a quantidade de registros retornados pela consulta
    $quantidade = $sql_query->num_rows;

    
// Se as credenciais estiverem corretas, inicia a sessão e define as variáveis de sessão
  if($quantidade == 1) {
    $usuario = $sql_query->fetch_assoc();

  if(!isset($_SESSION)) 
    { session_start(); }

// Define as variáveis de sessão com os dados do usuário logado
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

// Redireciona para a página do painel
        header("Location: painel.php");
} 
// Se as credenciais estiverem incorretas, exibe uma mensagem de erro
  else {
      echo "Falha ao logar! E-mail ou senha incorretos"; }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Página de Login</title>
    <link rel="stylesheet" href="style.css">
    
  </head>

<body>
  <img src="trip-animate.svg" alt="Trip Animation" class ="TripAnimation">
  <form action="" method="POST">
    <p>
      <label>E-mail</label>
      <input type="text" name="email" placeholder="email">
    </p>
    <p>
      <label>Senha</label>
      <input type="password" name="senha" placeholder="senha">
    </p>
    <p>
      <button type="submit">Entrar</button>
    </p>
    <p>
    <button type="button" onclick="window.location.href='cadastro.php'">Cadastre-se</button>
    </p>
  </form>
    <p>
      <a href="recuperar_senha.php">Esqueci minha senha</a>
    </p>
</body>
  
</html>