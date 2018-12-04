<?php

include 'Conexao.php';
include 'QueryBuilder.php';

$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$tags = $_POST['tags'];
$descricao = $_POST['descricao'];

$pdo = Conexao::conectar();
$query = new QueryBuilder($pdo);
$query->insertInto($titulo, $subtitulo, $tags, $descricao);