<?php

include "../Config/Conexion.php";
include "../Models/Usuario.php";


class UsuarioDAO extends Conexion{

    protected static $Conexion;

    //El metodo para poder conectarse
    private static function getConexion(){

        self::$Conexion = Conexion::conectar();

    }

    //El metodo para la desconexion
    private static function desconectar(){

        self::$Conexion = null;

    }
    

    //Metodo de para poder logearse
    public static function login($Usuario){

        
        $Query = "SELECT * FROM users WHERE usuario = :usuario AND pass = :password";

        self::getConexion();

       
        $Resultado = self::$Conexion->prepare($Query);

        
        $Resultado->bindValue(":usuario", $Usuario->getUsuario());
        $Resultado->bindValue(":password", $Usuario->getPassword());

        $Resultado->execute();

        return $Resultado->rowCount() > 0;            

    
    }

}

?>