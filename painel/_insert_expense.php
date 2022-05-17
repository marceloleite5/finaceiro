<?php

include 'conexao/conexao.php';

$titulo = $_POST['titulo'];
$desc = $_POST['description'];
$date1 = $_POST['date'];
$value = $_POST['value'];
$category = $_POST['categoria'];


$doc = $_FILES['doc'];

if($doc !== null) {

	preg_match("/\.(png|jpg|jpeg|pdf){1}$/i", $doc["name"], $ext);
    // Gera um nome Ãºnico para a imagem


	if ($ext == true) {

		$nome_doc = md5(uniqid(time())) . "." . $ext[1];

		$caminho_doc = "expense/" . $nome_doc;

		move_uploaded_file($doc["tmp_name"], $caminho_doc);



$sql = "INSERT INTO `expense`(`titulo`, `descricao`, `dateexpense`, `value`, `categoria`, `doc`) VALUES ('$titulo','$desc','$date1','$value','$category','$nome_doc')";
$inserir = mysqli_query($conexao,$sql);


	}

}


//header('Location: form_expense.php?msg=1');


?>