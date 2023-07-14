<?php
include 'config.php';

$UsuarioId = $_GET['UsuarioId'];

$sql = "SELECT * FROM demo WHERE id_usuario=$UsuarioId AND status=3";

$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <li>
        <h3>Atividade:</h3>
            <p><?php echo $row['txt']; ?></p> 
            <button id="delete" class="botoes" data-id="<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></button>
            <button id="edit" class="botoes" data-id="<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></button>
            <button id="left" class="botoes" data-id="<?php echo $row['id']; ?>"><i class="fa fa-chevron-left"></i></button>
            <button disabled id="right" class="botoes" data-id="<?php echo $row['id']; ?>"><i class="fa fa-chevron-right"></i></button>
        </li>

        <style>

#delete {
    background-color: red;
}
#edit {
    background-color: blue;
}
#left {
    background-color: orange;
}
#right {
    background-color: green;
}
.botoes{
    padding: 5px;
    border-radius: 5px;
}
li{
    background-color: white;
    margin: 10px;
    border: grey 2px solid;
    border-radius: 5px;
    width: 200px;
    text-align: center;
    box-shadow: 0 0 5px 2px grey;
    padding: 10px;

}
p {
    text-align: center;
    padding-bottom: 5px;
}
</style>




        <?php
    }
} else {
    echo "<div style='text-align:center;'>Hooray, no task here.</div>";
}
?>