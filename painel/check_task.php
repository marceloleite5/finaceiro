<?php

include 'conexao/conexao.php';


$id = $_GET['id'];
$code = $_GET['code'];

echo $sql = "UPDATE tasks SET status = 'Realizado' WHERE id = $id";
$inserir = mysqli_query($conexao,$sql); 

header('Location: project_details.php?code='.$code);

?>