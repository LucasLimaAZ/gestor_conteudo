<?php

$id = $_POST['submit'];

include 'QueryBuilder.php';
include 'Conexao.php';

$pdo = Conexao::conectar();
$query = new QueryBuilder($pdo);
$resultados = $query->selectWhere('conteudo',$id);

foreach($resultados as $campo){
    $titulo = $campo->titulo;
    $subtitulo = $campo->subtitulo;
    $tags = $campo->tags;
    $descricao = $campo->descricao;
}
