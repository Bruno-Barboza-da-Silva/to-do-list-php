<?php
// Include Connection
include 'config.php';

  $UsuarioId = $_POST['UsuarioId'];
  $txt = $_POST['txt']; 

    $sql = "INSERT INTO demo (txt, id_usuario, status) VALUES ('$txt', $UsuarioId, 1)";
    $result = mysqli_query($mysqli, $sql);


if ($result) {
    echo 1;
} else {
    echo "Error: {$sql}" . mysqli_error($mysqli);
}
?>

