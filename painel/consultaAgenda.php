<?php
    $pdo = new PDO("mysql:host=localhost; dbname=db_dashboard; charset=utf8;", "root", "");
    $dados = $pdo->prepare("SELECT name FROM agenda");
    $dados->execute();
    echo json_encode($dados->fetchAll(PDO::FETCH_ASSOC));
?>