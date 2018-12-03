<?php

class Conexao{

    public static function conectar(){

        try{

           return new PDO('mysql:host=127.0.0.1;dbname=conteudo', 'root', '');

        }catch(PDOException $e){

            die($e->getMessage());
            
        }

    }

}

?>