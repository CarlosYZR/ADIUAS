<?php


class Conexion{

    //private $Server = "127.0.0.1";
    //private $User = "root";
    //private $DB = "adiuas";
    //private $Password = "123456789";

    public static function conectar(){

        try{

            $Conexion = new PDO("mysql:host=127.0.0.1;dbname=adiuas",
                            "root",       
                            "123456789"    
            );

            return $Conexion;

        }catch(PDOException $Error){
            die($Error->getMessage());
        }

    }
    
 
}


Conexion::conectar();


?>
