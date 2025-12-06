<?php
// conexao.php
$host = "localhost";
$usuario = "root";
$senha = "1234";
$banco = "cadexpansao";

$mysqli = new mysqli($host, $usuario, $senha, $banco);

if($mysqli->connect_errno) {
    die("Falha na conexão: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}

$mysqli->set_charset("utf8mb4");
?>