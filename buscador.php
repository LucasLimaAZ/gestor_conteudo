<?php

include 'Conteudo.php';
include 'Conexao.php';

$statement = $pdo->prepare('select * from conteudo');
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_CLASS, 'Conteudo');

?>