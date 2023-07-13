<?php
// Include Connection
include 'config.php';

session_start(); // Inicia a sessão

if (isset($_SESSION['id'])) {
    $UsuarioId = $_SESSION['id'];
    $txt = mysqli_real_escape_string($mysqli, $_POST['txt']);

    $sql = "INSERT INTO demo (txt, id_usuario) VALUES ('$txt', $UsuarioId)";
    $result = mysqli_query($mysqli, $sql);
}

if ($result) {
    echo 1;
} else {
    echo "Error: {$sql}" . mysqli_error($mysqli);
}
?>

