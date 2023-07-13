<?php
// Include Connection
include 'config.php';

if (!isset($_SESSION)) {
    session_start();
}

session_destroy();

echo "<script>";
echo "alert('Você saiu com sucesso');";
echo "window.location.href = '../index.php';";
echo "</script>";
exit();
?>