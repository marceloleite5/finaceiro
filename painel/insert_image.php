<?php
include 'conexao/conexao.php';
include 'script/password.php';

$id = $_POST['id'];

$image2 = $_FILES['image'];
$image = file_get_contents($_FILES['image']['tmp_name']);
$nameImage = md5($_FILES['image']);
move_uploaded_file($image['tmp_name'], "images/" . $nameImage .'.jpg');



echo $sql = "UPDATE usuario SET image = '$nameImage' where id = $id";
//$insert = mysqli_query($conexao,$sql);


?>