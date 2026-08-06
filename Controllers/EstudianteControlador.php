<?php

    include "../Models/EstudianteDAO.php";

    class EstudianteControlador{

        //Funcion del controlador para hacer el objeto
        public static function objetoEstudiante($DatosEstudiante){

            //Hice el objeto de estudiante para que obtenga los parametros para
            //  poder guardar a los estudiantes nuevos en la base de datos
            $ObjEstudiante = new Estudiante();

            if (!is_array($DatosEstudiante)){
                $ObjEstudiante->setId($DatosEstudiante);
                return $ObjEstudiante;
            }

            //El objeto estudiante seteara los parametros que vienen del array $DatosEstudiante
            //$DatosEstudiante es un array que se declara y recibe los datos en /Views/RegistroVisita.php
            $ObjEstudiante->setId($DatosEstudiante['id'] ?? null);
            $ObjEstudiante->setNombre($DatosEstudiante[':nombre'] ?? null);
            $ObjEstudiante->setEdad($DatosEstudiante[':edad'] ?? null);
            $ObjEstudiante->setGenero($DatosEstudiante[':genero'] ?? null);
            $ObjEstudiante->setCorreo($DatosEstudiante[':correo'] ?? null);
            $ObjEstudiante->setTelefono($DatosEstudiante[':telefono'] ?? null);
            $ObjEstudiante->setGrupo($DatosEstudiante[':grupo'] ?? null);
            $ObjEstudiante->setEscuela($DatosEstudiante[':escuela'] ?? null);
            $ObjEstudiante->setUnidad($DatosEstudiante[':unidad'] ?? null);
            $ObjEstudiante->setPoblacion($DatosEstudiante[':poblacion'] ?? null);


            //retorno de mi objeto
            return $ObjEstudiante;

        }

        //Metodo para guardar los datos del estudiante
        public static function guardarDatos($DatosEstudiante){

            $GuardarDatosEstudiante = self::objetoEstudiante($DatosEstudiante);

            EstudianteDAO::guardarDatos($GuardarDatosEstudiante);

        }

        //Metodo para mostrar los datos del estudiante
        public static function mostrarDatos(){

            $listaEstudiantes = EstudianteDAO::mostrarDatos();
    
            return $listaEstudiantes;

        }
    
        //Funcion para actualizar el estudiante
        public static function actualizarDatos($DatosEstudiante){

            $ActualizarDatosEstudiante = self::objetoEstudiante($DatosEstudiante);
            
            EstudianteDAO::actualizarDatos($ActualizarDatosEstudiante);

        }

        //Funcion para eliminar el estudiante
        public static function eliminarDatos($DatosEstudiante){

            $EliminarDatosEstudiante = self::objetoEstudiante($DatosEstudiante);

            EstudianteDAO::eliminarDatos($EliminarDatosEstudiante);

        }

    }

?>