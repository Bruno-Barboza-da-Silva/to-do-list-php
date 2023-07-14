<?php
  include '../dados.php';

$mysqli = new mysqli($host, $user , $password, $database);

if ($mysqli->connect_errno) {
    die('Erro ao conectar ao banco de dados: ' . $mysqli->connect_error);
}
?>

