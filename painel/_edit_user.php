<?php

include 'conexao.php';

$id = $_POST['id'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];



$sql = "UPDATE `usuario` SET `name`='$name',`mail`='$mail',`tel`='$tel' WHERE id = $id";
$insert = mysqli_query($conexao, $sql);

header('Location: list_users.php?msg=1');



?>