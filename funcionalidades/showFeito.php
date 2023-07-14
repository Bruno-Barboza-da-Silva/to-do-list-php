<?php
include 'config.php';

$UsuarioId = $_GET['UsuarioId'];

$sql = "SELECT * FROM demo WHERE id_usuario=$UsuarioId AND status=3";

$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <li class="atividades">
        <h3>Atividade:</h3>
            <p class="p"><?php echo $row['txt']; ?></p> 
            <button id="delete" class="botoes delete" data-id="<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></button>
            <button id="edit" class="botoes edit" data-id="<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></button>
            <button id="left" class="botoes left" data-id="<?php echo $row['id']; ?>"><i class="fa fa-chevron-left"></i></button>
            <button disabled id="right" class="botoes right" data-id="<?php echo $row['id']; ?>"><i class="fa fa-chevron-right"></i></button>
        </li>

        <?php
    }
} else {
    echo "<div>Sem atividades...</div>";
}
?>