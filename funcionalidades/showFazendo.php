<?php
include 'config.php';

$UsuarioId = $_GET['UsuarioId'];

$sql = "SELECT * FROM demo WHERE id_usuario=$UsuarioId AND status=2";

$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <li class="atividades">
        <h3>Atividade:</h3>
            <p class="p"><?php echo $row['txt']; ?></p> 
                   <button id="delete" class="botoes delete" data-id="<?php echo $row['id']; ?>" ><img src="../../images/deletar.svg"  class="btn-img"alt="deletar" ></button>
            <button id="edit" class="botoes edit" data-id="<?php echo $row['id']; ?>"><img src="../../images/editar.svg" class="btn-img" alt="editar" ></i></button>
            <button id="left" class="botoes left" data-id="<?php echo $row['id']; ?>"><img src="../../images/voltar.svg" class="btn-img"alt="voltar" ></button>
            <button id="right" class="botoes right" data-id="<?php echo $row['id']; ?>"><img src="../../images/passar.svg" class="btn-img "alt="passar" ></button>
        </li>

        <?php
    }
} else {
    echo "<div>Sem atividades...</div>";
}
?>