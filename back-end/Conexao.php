<?php

class Conexao{

    public static function conectar(){

        try{

           return new PDO('mysql:host=localhost;dbname=domcom_projetos', 'domcom_projetos', ')*G31(IPfNEY');

        }catch(PDOException $e){

            die($e->getMessage());
            
        }

    }

}

?>