<?php


include 'conexao/conexao.php';

$id = $_POST['id'];
$code = $_POST['code'];

$sql = "DELETE FROM payment where id = $id";
$delet = mysqli_query($conexao,$sql);


header('Location: project_details.php?code='.$code);


?>