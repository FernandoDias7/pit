<?php
include('conexao.php');

// Verifica se o formulário de cadastro foi submetido
  if(isset($_POST['submit'])) {
 
// Verifica se todos os campos obrigatórios estão preenchidos
  if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha'])) {
    echo "Preencha todos os campos."; } 

  else {
    $nome = $mysqli->real_escape_string($_POST['nome']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

// Verifica se o e-mail já está cadastrado no banco de dados
    $sql_check = "SELECT * FROM usuarios WHERE email = '$email'";
    $check_result = $mysqli->query($sql_check);

  if($check_result->num_rows > 0) {
    echo "Este email já está cadastrado."; }
// Insere os dados do novo usuário no banco de dados
  else {
    $sql_insert = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
  
  if($mysqli->query($sql_insert)) {
    echo "Cadastro realizado com sucesso!";
    echo '<p><button type="button" onclick="window.location.href=\'index.php\'">Fazer login</button></p>'; } 
  else {
    echo "Erro ao cadastrar. Por favor, tente novamente."; }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
</head>
<body>
  <h2>Cadastro</h2>

  <form action="" method="POST">
    <p>
      <label>Nome</label>
      <input type="text" name="nome">
    </p>
    <p>
      <label>E-mail</label>
      <input type="text" name="email">
    </p>
    <p>
      <label>Senha</label>
      <input type="password" name="senha">
    </p>
    <p>
      <button type="submit" name="submit">Cadastrar</button>
    </p>

    <p>
    <button type="button" onclick="window.location.href='index.php'">Faça login</button>
    </p>
  </form>
</body>
</html>
