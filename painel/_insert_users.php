<?php

include './conexao/conexao.php';
include './script/password.php';

$mail = $_POST['mail'];
$password = $_POST['password'];
$nivel = $_POST['nivel'];

$sql = "SELECT * FROM usuario where mail = '$mail'";
$search = mysqli_query($conexao,$sql);

$total = mysqli_num_rows($search); //contar quantas linhas temos no resultado

if($total > 0) {
	header('Location: ../index.php?msg=3'); //mensagem de retorno (usuário já existe)
} else {

	$sql = "INSERT INTO usuario (mail,password,id_user_nivel) values ('$mail', sha1('$password'),$nivel)";
	$insert = mysqli_query($conexao, $sql);

	header('Location: form_user.php?msg=1');
}






?>