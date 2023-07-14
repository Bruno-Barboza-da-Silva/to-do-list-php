<?php
$host = "localhost:3307"; // colocar o seu host
$user = "root"; // colocar o seu usuário
$password = "NOVASENHA"; // colocar a sua senha
$database = "to_do_list"; // colocar a sua base de dados

$mysqli = new mysqli($host, $user , $password, $database);

if ($mysqli->connect_errno) {
    die('Erro ao conectar ao banco de dados: ' . $mysqli->connect_error);
}
?>

