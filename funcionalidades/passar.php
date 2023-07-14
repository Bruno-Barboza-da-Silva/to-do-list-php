<?php
  // Include Connection
  include 'config.php';

  $id = $_POST['id'];


  $sql = "UPDATE demo SET status = status + 1 WHERE id = '$id'";
  $result = mysqli_query($mysqli, $sql);

  if ($result) {
    echo 1;
  } else {
    echo 0;
  }