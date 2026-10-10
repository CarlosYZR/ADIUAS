<?php

    include "../Controllers/EstudianteControlador.php";


    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $Valores = ['nombre', 'edad', 'genero', 'correo', 'telefono', 'grupo', 'escuela', 'unidad', 'poblacion'];
        $DatosEstudiante = [];
        $Token = TRUE;

        foreach($Valores as $Valor){


            //###########              RECORDATORIO PARA MI MISMO                     ###################
            //########### EL TRIM NO ESTA FUNCIONANDO DENTRO DEL IF Y NO SE POR QUE   ##################
            $ValorSinEspacios = trim($_POST[$Valor]);
            
            if(!isset($_POST[$Valor]) || $ValorSinEspacios === ''){
                
                $Token = FALSE;
                break;

            }

            $DatosEstudiante[':'.$Valor] = trim($_POST[$Valor]);

        }

        if($Token){

            EstudianteControlador::guardarDatos($DatosEstudiante);
            header("Location: ../Views/RegistroVisita.php");
            exit();

        }else{

            header("Location: ../Views/RegistroVisita.php");
            exit();

        }

    }else{

        header("Location: ../Views/Login.php");
        exit();

    }
    



    /*/////////////////// ESTO TIENE UNA MALA LOGICA
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
        
    }*/



?>