<?php
include 'config.php';

if(isset($_POST['email'], $_POST['senha'])) {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    if(empty($email)) {
        echo "Preencha seu e-mail";
    } else if(empty($senha)) {
        echo "Preencha sua senha";
    } else {
        $sql_code = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";
        $result = mysqli_query($mysqli, $sql_code);

        if ($result) {
            session_start();
            $_SESSION['id'] = mysqli_insert_id($mysqli); // Recupera o ID do usuário recém-inserido
            echo "<script>console.log('" . $_SESSION['id'] . "');</script>"; // Correção na sintaxe do console.log
            header("Location: ../pages/painel/painel.php");
            exit; // Adiciona um exit para interromper a execução do código após redirecionar
        } else {
            echo "Falha ao cadastrar o usuário";
        }
    }
}

if (!$result) {
    echo "Erro MySQL: " . mysqli_error($mysqli);
}
?>