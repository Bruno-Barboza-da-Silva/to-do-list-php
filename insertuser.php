<?php
// Include Connection
include 'config.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";
$result = mysqli_query($mysqli, $sql);

if ($result) {
    echo 1;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}
?>
