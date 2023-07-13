<?php
  include 'config.php';

  $UsuarioId = $_GET['UsuarioId'];

  $sql = "SELECT * FROM demo WHERE id_usuario=$UsuarioId AND status=3";
  
  $result = mysqli_query($mysqli, $sql);
   
  $count = mysqli_num_rows($result);

?>

Total <span><?php echo $count; ?></span>
