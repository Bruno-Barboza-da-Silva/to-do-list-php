<?php
include 'config.php';
session_start(); // Inicia a sessão

if(isset($_SESSION['id'])){
  header('Access-Control-Allow-Credentials: true');
  echo $_SESSION['id'];
} else {
  echo "false";
}
?>
