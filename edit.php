<?php
  // Include Connection
  include 'config.php';

  $id = $_POST['id'];
  $txt = $_POST['txt']; 

  $sql = "UPDATE demo SET txt='$txt' WHERE id='$id'";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo 1;
  } else {
    echo 0;
  }
?>
