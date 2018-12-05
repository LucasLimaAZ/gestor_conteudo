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



if(isset($_FILES['logo']))
{
        $logo = $_FILES['logo'];

        $logo_nome = $logo['name'];
        $logo_tmp = $logo['tmp_name'];
        $logo_tamanho = $logo['size'];
        $logo_erro = $logo['error'];

        $logo_ext = explode('.', $logo_nome);
        $logo_ext = strtolower(end($logo_ext));

        $permitidos = array('pdf','jpg','png','JPEG','gif');

        if(in_array($logo_ext, $permitidos)){
            if($logo_erro === 0){
                if($logo_tamanho <= 2097152){

                    $logo_nome_novo = uniqid('', true) .' '.$nome . ' LOGO' . '.' . $logo_ext;
                    $logo_destino = 'uploads/imagens/'.$logo_nome_novo;

                    if(move_uploaded_file($logo_tmp, $logo_destino)){
                        echo(" ");
                    }
            

                }
            }
        }
}



$pdo = Conexao::conectar();
$query = new QueryBuilder($pdo);
$query->insertInto($nome, $titulo, $subtitulo, $tags, $descricao, $cor_primaria, $cor_secundaria, $frases, $links, $telefone, $email, $endereco, $quem_somos);

?>