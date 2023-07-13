<?php
  // Include Connection
  include 'config.php';

  session_start(); // Inicia a sessão

  if (isset($_SESSION['id'])) {
    $UsuarioId = $_SESSION['id'];
    $sql = "DELETE FROM demo  WHERE id_usuario=$UsuarioId";
    $result = mysqli_query($mysqli, $sql);
}

  if ($result) {
    echo 1;
  }else {
    echo "Error: {$sql}" . mysqli_error($mysqli);
  }
?>



