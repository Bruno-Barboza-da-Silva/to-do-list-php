<?php
  include 'config.php';

  $sql = "SELECT * FROM demo";
  $result = mysqli_query($conn, $sql);

  $count = mysqli_num_rows($result);
?>

Total Task <span><?php echo $count; ?></span>
