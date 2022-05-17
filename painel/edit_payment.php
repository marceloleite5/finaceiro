<?php

include 'conexao/conexao.php';

$id = $_POST['id'];
$code = $_POST['code'];
$dateend = $_POST['date'];
$value = $_POST['value'];


$sql = "UPDATE payment SET payment = '$value', dateend = '$dateend' WHERE id = $id ";
$att = mysqli_query($conexao,$sql);


header('Location: project_details.php?code='.$code);


?>