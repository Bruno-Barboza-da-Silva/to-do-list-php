<?php
include 'config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM demo WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $data = mysqli_fetch_assoc($result);
    echo json_encode($data["txt"]);
} else {
    echo "0";
}
?>













