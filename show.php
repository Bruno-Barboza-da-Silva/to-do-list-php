<?php
  include 'config.php';



  $sql = "SELECT * FROM demo";
  $result = mysqli_query($mysqli, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>

<li>
  <p><?php echo $row['txt']; ?></p> 
  <button id="delete" data-id="<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></button>
  <button id="edit" data-id="<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></button>
</li>

<?php } }else { echo "<div style='text-align:center;'>Hooray, no task here.</div>"; } ?>
