<?php

// Inicia a sessão, caso não tenha sido iniciada
if(!isset($_SESSION)) {
    session_start();
}

// Destroi a sessão, removendo todas as variáveis de sessão
session_destroy();

// Redireciona o usuário de volta para a página de login (index.php)
header("Location: index.php");