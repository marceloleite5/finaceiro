<?php

include 'conexao/conexao.php';

$name = $_POST['name'];
$id = $_POST['id'];
$tel = $_POST['tel'];
$cnpj = $_POST['cnpj'];


$update = "UPDATE usuario SET name='$name',tel='$tel',cnpj='$cnpj' WHERE id = $id";
$att = mysqli_query($conexao,$update);

header('Location: profile.php?msg=1');

?>