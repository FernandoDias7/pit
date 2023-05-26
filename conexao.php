<?php

// Configurações de conexão com o banco de dados
$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

// Cria uma nova instância do objeto de conexão mysqli
$mysqli = new mysqli($host, $usuario, $senha, $database);

// Verifica se ocorreu um erro na conexão com o banco de dados
if($mysqli -> error) 
{
// Caso tenha ocorrido um erro, exibe a mensagem de erro e encerra a execução do script
    die("Falha ao conectar ao banco de dados:" . $mysqli->error);
}