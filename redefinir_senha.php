<?php
session_start();

if (!isset($_SESSION['id'])) {
  header("Location: index.php");
  exit;
}

// Inclua o arquivo de conexão com o banco de dados
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  // Exiba um formulário para que o usuário insira a nova senha
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha</title>
  </head>
  <body>
    <h2>Redefinir Senha</h2>

    <form action="redefinir_senha.php" method="POST">
      <p>
        <label>Nova Senha</label>
        <input type="password" name="nova_senha">
      </p>
      <p>
        <button type="submit">Salvar Nova Senha</button>
      </p>
    </form>
  </body>
  </html>
  <?php
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Processar a solicitação de redefinição de senha

  // Certifique-se de que o campo da nova senha foi preenchido
  if (empty($_POST['nova_senha'])) {
    echo "Por favor, informe a nova senha.";
  } else {
    // Obtenha o ID do usuário logado
    $idUsuario = $_SESSION['id'];
    
    // Obtenha a nova senha do formulário
    $novaSenha = $_POST['nova_senha'];



    // Preparar a consulta SQL usando prepared statements
    $sql = "UPDATE usuarios SET senha = ? WHERE id = ?";

    // Preparar a declaração
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
      // Vincular os parâmetros e seus tipos
      $stmt->bind_param("si", $senhaHash, $idUsuario);

      // Executar a consulta preparada
      $resultado = $stmt->execute();

      if ($resultado) {
        echo "Senha redefinida com sucesso!";

        // Exiba um botão de login após a redefinição da senha
        ?>
        <p>
          <a href="index.php">Fazer Login</a>
        </p>
        <?php
      } else {
        echo "Erro ao redefinir a senha: " . $stmt->error;
      }

      // Fechar a declaração
      $stmt->close();
    } else {
      echo "Erro na preparação da consulta: " . $mysqli->error;
    }
  }
}
?>
