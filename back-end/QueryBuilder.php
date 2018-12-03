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

    public function inserirDados($titulo, $subtitulo, $tags, $descricao){

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $inserir = $this->pdo->prepare("INSERT INTO `conteudo`(`titulo`, `subtitulo`, `tags`, `descricao`) VALUES ('$titulo', '$subtitulo', '$tags', '$descricao')");
        $inserir->execute();

    }

}

?>