<?php

include 'conexao/conexao.php';

$service = $_POST['service'];
$code = $_POST['code'];
$dateend = $_POST['date'];
$value = $_POST['value'];
$npay = $_POST['npay'];


$sql = "UPDATE project SET service = '$service', dateend = '$dateend',paytotal = '$paytotal', npayments = $npay WHERE code = $code ";
$att = mysqli_query($conexao,$sql);


header('Location: project_details.php?code='.$code);


?>