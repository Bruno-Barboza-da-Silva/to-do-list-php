<?php
  // $conn = mysqli_connect("localhost:3307", "root", "NOVASENHA", "to_do_list") or exit("Connection Failed.");



  $mysqli = new mysqli("localhost:3307", "root", "NOVASENHA", "to_do_list");

if ($mysqli->connect_errno) {
    die('Erro ao conectar ao banco de dados: ' . $mysqli->connect_error);
}
?>


