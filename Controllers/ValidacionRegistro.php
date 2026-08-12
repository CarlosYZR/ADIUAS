<?php

    include "../Controllers/EstudianteControlador.php";


    if($_SERVER['METHOD_REQUEST'] === 'POST'){

        $Valores = ['nombre', 'edad', 'genero', 'correo', 'telefono', 'grupo', 'escuela', 'unidad', 'poblacion'];
        $DatosEstudiante = [];
        $Token = TRUE;


        foreach($Valores as $Valor){
            
            if(!isset($_POST($Valor)) || $Valor === ''){
                
                $Token = FALSE;
                break;

            }else{

                $DatosEstudiante = 

            }

        }

    }else{

        header("Location: ../Views/Login.php");
        exit();

    }
    













    if(

        isset($_POST["nombre"]) ||
        isset($_POST['edad']) ||
        isset($_POST['genero']) ||
        isset($_POST['correo']) ||
        isset($_POST['telefono']) ||
        isset($_POST['grupo']) ||
        isset($_POST['escuela']) ||
        isset($_POST['unidad']) ||
        isset($_POST["poblacion"])
        )
    {

        $DatosEstudiante = [

            ':nombre' => $_POST['nombre'],
            ':edad' => $_POST['edad'],
            ':genero' => $_POST['genero'],
            ':correo' => $_POST['correo'],
            ':telefono' => $_POST['telefono'],
            ':grupo' => $_POST['grupo'],
            ':escuela' => $_POST['escuela'],
            ':unidad' => $_POST['unidad'],
            ':poblacion' => $_POST['poblacion']

        ];

        //Funcion
        EstudianteControlador::guardarDatos($DatosEstudiante);
        
    }



?>