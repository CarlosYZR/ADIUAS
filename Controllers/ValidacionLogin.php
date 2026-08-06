<?php

    include("../Controllers/UsuarioControlador.php");
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $TxtUsuario = $_POST["input_username"] ?? '';
        $TxtPassword = $_POST["input_password"] ?? '';

        if (UsuarioControlador::login($TxtUsuario, $TxtPassword)) {
            
            $_SESSION['usuario'] = $TxtUsuario;
            header("Location: ../Views/index.php");
            exit();

        }else{
            
            header("Location: ../Views/login.php?error=Algo salio mal");
            exit();
        }

    }else{
        
        header("Location: ../Views/login.php");
        exit();
    }
?>