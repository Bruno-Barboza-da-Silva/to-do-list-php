<?php
  include 'config.php';

  $UsuarioId = $_GET['UsuarioId'];

  $sql = "SELECT * FROM demo WHERE id_usuario=$UsuarioId AND status=2";
  
  $result = mysqli_query($mysqli, $sql);
   
  $count = mysqli_num_rows($result);

?>

 <p id="teste" class="teste">Total: <?php echo $count; ?></p>









