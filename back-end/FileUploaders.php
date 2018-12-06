<?php

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

$i = 0;
 
foreach ($_FILES["midias"]["error"] as $key => $error) {

    $novo_nome[$i] = $nome . ' ' . $_FILES["midias"]["name"][$i];
   
    $destino = "uploads/imagens/" . $novo_nome[$i];
   
    move_uploaded_file( $_FILES["midias"]["tmp_name"][$i], $destino );
 
    $i++;
}

$j = 0;
 
foreach ($_FILES["fotos"]["error"] as $key => $error) {

    $fotos_nome[$j] = $nome . ' ' . $_FILES["fotos"]["name"][$j];
   
    $fotos_destino = "uploads/imagens/" . $fotos_nome[$j];
   
    move_uploaded_file( $_FILES["fotos"]["tmp_name"][$j], $fotos_destino );
 
    $j++;
}