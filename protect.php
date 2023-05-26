<?php
// Verifica se a sessão não foi iniciada previamente
if(!isset($_SESSION)) {
    session_start();}
// Verifica se o usuário está logado (se a variável de sessão 'id' está definida)
    if(!isset($_SESSION['id'])) {
// Caso não esteja logado, exibe uma mensagem de erro e um link para a página de login (index.php)
        die("Voce nao pode acessar esta pagina porque nao esta logado.<p><a href=\"index.php\">Entrar</a></p>");
    }
?>