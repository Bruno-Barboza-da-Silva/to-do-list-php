<?php
  include 'config.php';

  session_start(); // Inicia a sessão
  if (isset($_SESSION['id'])) {
    $UsuarioId = $_SESSION['id'];
    echo "<script>";
    echo "alert('Tem alguma sessão aqui!!');";
    echo "console.log(" . json_encode($_SESSION['id']) . ");";
    echo "console.log(" . json_encode($id) . ");";
    echo "</script>";

    $sql = "SELECT * FROM demo WHERE id_usuario=$UsuarioId";
    $result = mysqli_query($mysqli, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>

<li>
  <p><?php echo $row['txt']; ?></p> 
  <button id="delete" data-id="<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></button>
  <button id="edit" data-id="<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></button>
</li>

<?php } }else { echo "<div style='text-align:center;'>Hooray, no task here.</div>"; }


  } else {
    echo "<script>";
    echo "alert('A chave id da sessão não está definida.');";
    echo "</script>";
}

   ?>
