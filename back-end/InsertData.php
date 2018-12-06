<?php

include 'Conexao.php';
include 'QueryBuilder.php';

$nome = $_POST['nome'];
$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$tags = $_POST['tags'];
$descricao = $_POST['descricao'];
$cor_primaria = $_POST['cor_primaria'];
$cor_secundaria = $_POST['cor_secundaria'];
$frases = $_POST['frases'];
$links = $_POST['links'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$quem_somos = $_POST['quem_somos'];
$produtos = $_POST['produtos'];

include 'FileUploaders.php';

$pdo = Conexao::conectar();
$query = new QueryBuilder($pdo);
$query->insertInto($nome, $titulo, $subtitulo, $tags, $descricao, $cor_primaria, $cor_secundaria, $frases, $links, $telefone, $email, $endereco, $quem_somos, $produtos);

?>