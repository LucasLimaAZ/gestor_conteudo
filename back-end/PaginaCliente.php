<?php

$id = $_POST['submit'];

include 'QueryBuilder.php';
include 'Conexao.php';

$pdo = Conexao::conectar();
$query = new QueryBuilder($pdo);
$resultados = $query->selectWhere('conteudo',$id);

foreach($resultados as $campo){
    $nome = $campo->nome;
    $titulo = $campo->titulo;
    $subtitulo = $campo->subtitulo;
    $tags = $campo->tags;
    $descricao = $campo->descricao;
    $cor_primaria = $campo->cor_primaria;
    $cor_secundaria = $campo->cor_secundaria;
    $frases = $campo->frases;
    $links = $campo->links;
    $telefone = $campo->telefone;
    $email = $campo->email;
    $endereco = $campo->endereco;
    $quem_somos = $campo->quem_somos;
}
