<?php
include('conexao.php');

// Verifica se o formulário de recuperação de senha foi submetido
  if(isset($_POST['submit'])) {

// Verifica se o campo de e-mail está vazio
  if(empty($_POST['email'])) {
    echo "Por favor, informe seu e-mail."; } 

// Obtém o e-mail informado no formulário
  else {
    $email = $mysqli->real_escape_string($_POST['email']);

// Verifica se o e-mail existe no banco de dados
  $sql_check = "SELECT * FROM usuarios WHERE email = '$email'";
  $check_result = $mysqli->query($sql_check);

// Verifica se o e-mail foi encontrado no banco de dados
  if($check_result->num_rows > 0) {

// E-mail encontrado, exibe uma mensagem informando que um e-mail foi enviado para o usuário
  echo "Um e-mail foi enviado para o endereço fornecido com instruções para recuperar sua senha.";   } 
  
// E-mail não encontrado, exibe uma mensagem de erro
  else {
    echo "O e-mail informado não está cadastrado.";
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
  <title>Recuperar Senha</title>
</head>
<body>
  <h2>Recuperar Senha</h2>

  <form action="" method="POST">
    <p>
      <label>E-mail</label>
      <input type="text" name="email">
    </p>
    <p>
      <button type="submit" name="submit">Recuperar Senha</button>
    </p>
  </form>
</body>
</html>