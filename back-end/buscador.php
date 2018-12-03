<?php

include 'QueryBuilder.php';
include 'Conexao.php';

$pdo = Conexao::conectar();
$query = new QueryBuilder($pdo);
$resultados = $query->selectAll('conteudo');

?>