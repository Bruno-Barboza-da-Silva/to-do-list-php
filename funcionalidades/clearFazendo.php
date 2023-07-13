<?php
  // Include Connection
  include 'config.php';

  $UsuarioId = $_GET['UsuarioId'];


  $sql = "DELETE FROM demo WHERE id_usuario=$UsuarioId AND status=2";



  $result = mysqli_query($mysqli, $sql);

  if ($result) {
    echo 1;
  } else {
    echo 0;
  }
?>
