<?php

class QueryBuilder{

    protected $pdo;

    public function __construct($pdo){

        $this->pdo = $pdo;

    }

    public function selectAll($table){

        $selecionaTodos = $this->pdo->prepare("select * from {$table}");
        $selecionaTodos->execute();
        return $selecionaTodos->fetchAll(PDO::FETCH_CLASS);

    }

    public function selectWhere($table, $id){

        $seleciona = $this->pdo->prepare("select * from {$table} where id=$id");
        $seleciona->execute();
        return $seleciona->fetchAll(PDO::FETCH_CLASS);

    }

    public function insertInto($nome, $titulo, $subtitulo, $tags, $descricao, $cor_primaria, $cor_secundaria, $frases, $links, $telefone, $email, $endereco, $quem_somos, $produtos){

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $inserir = $this->pdo->prepare("INSERT INTO `conteudo`(`nome`, `titulo`, `subtitulo`, `tags`, `descricao`, `cor_primaria`, `cor_secundaria`, `frases`, `links`, `telefone`, `email`, `endereco`, `quem_somos`, `produtos`) VALUES ('$nome','$titulo', '$subtitulo', '$tags', '$descricao','$cor_primaria','$cor_secundaria','$frases','$links','$telefone','$email','$endereco','$quem_somos','$produtos')");
        $inserir->execute();

    }

}

?>