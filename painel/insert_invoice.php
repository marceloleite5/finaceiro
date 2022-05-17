<?php
include 'conexao/conexao.php';

$code = $_POST['code'];
$id = $_POST['id'];
$recibo = $_FILES['recibo'];

if($recibo !== null) {

	preg_match("/\.(png|jpg|jpeg|pdf){1}$/i", $recibo["name"], $ext);
    // Gera um nome Ãºnico para a imagem


	if ($ext == true) {

		$nome_recibo = md5(uniqid(time())) . "." . $ext[1];

		$caminho_recibo = "invoice/" . $nome_recibo;

		move_uploaded_file($recibo["tmp_name"], $caminho_recibo);



$sql = "UPDATE payment SET  invoice = '$nome_recibo' WHERE id=$id";
$inserir = mysqli_query($conexao,$sql);


	}

}


header('Location: project_details.php?code='.$code);


?>