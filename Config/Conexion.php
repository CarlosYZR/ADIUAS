<?php


class Conexion{

    //private $Server = "127.0.0.1";
    //private $User = "root";
    //private $DB = "adiuas";
    //private $Password = "123456789";

    public static function conectar(){

        try{

            //PDO recibe los parametros del host y la base de datos//
            $Conexion = new PDO("mysql:host=127.0.0.1;dbname=adiuas",
                            "root",       //Asi como tambien debemos indicar el usuario//
                            "123456789"    //Y la contraseña//
            );

            return $Conexion;

        }catch(PDOException $Error){
            die($Error->getMessage());
        }

    }
    
 
}


Conexion::conectar();


?>
