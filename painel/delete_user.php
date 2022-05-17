<?php

include 'conexao/conexao.php';

$id = $_POST['id'];
$name = $_POST['name'];


$sql = "DELETE FROM usuario WHERE id = $id";
$delete = mysqli_query($conexao, $sql);

header('Location: list_users.php?msg=2');



?>