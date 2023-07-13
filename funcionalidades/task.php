<?php
  include 'config.php';

  session_start(); // Inicia a sessão

  if (isset($_SESSION['id'])) {
    $UsuarioId = $_SESSION['id'];
    
    $sql = "SELECT * FROM demo WHERE id_usuario=$UsuarioId" ;
    $result = mysqli_query($mysqli, $sql);
  
    $count = mysqli_num_rows($result);
}


?>

Total Task <span><?php echo $count; ?></span>





