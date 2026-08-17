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
      
        $Query = "SELECT * FROM users WHERE usuario = :usuario";

        self::getConexion();
   
        $Resultado = self::$Conexion->prepare($Query);   
        $Resultado->bindValue(":usuario", $Usuario->getUsuario());

        $Resultado->execute();

        $ArrayUsuario = $Resultado->fetch(PDO::FETCH_ASSOC);

        if($ArrayUsuario['usuario'] && password_verify($Usuario->getPassword(), $ArrayUsuario['pass'])){

            session_start();
            $_SESSION['admin'] = $ArrayUsuario['admin'];

            return TRUE;

        }


    
    }

}

?>