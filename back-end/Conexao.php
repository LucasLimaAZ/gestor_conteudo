<?php

class Conexao{

    public static function conectar(){

        try{

           return new PDO('mysql:host=localhost;dbname=conteudos', 'root', '');

        }catch(PDOException $e){

            die($e->getMessage());
            
        }

    }

}

?>