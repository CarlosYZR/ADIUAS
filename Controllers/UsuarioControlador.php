<?php

include "../Models/UsuarioDAO.php";

class UsuarioControlador{

    //Funcion login
    public static function login($Usuario, $Password){

        $ObjUsuario = new Usuario();
  

        $ObjUsuario->setUsuario($Usuario);
        $ObjUsuario->setPassword($Password);


        return UsuarioDao::login($ObjUsuario);

    }

    //Log out
    public static function logout(){

        return UsuarioDAO::logout();

    }

}

?>