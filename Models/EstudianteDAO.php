<?php

    include "../Models/Estudiante.php";
    include "../Config/Conexion.php";

    class EstudianteDao extends Conexion{
        
        protected static $Conexion;

        //El metodo para poder conectarse
        private static function getConexion(){

            self::$Conexion = Conexion::conectar();

        }

        
        //El metodo para la desconexion
        private static function desconectar(){

            self::$Conexion = null;

        }
            

        //Funcion para registrar estudiantes en la base de datos que se cae a pedazos
        public static function guardarDatos($Estudiante){


            //Mi querysote
            // Especifica las columnas entre paréntesis antes del VALUES
            $Query = "INSERT INTO students (nombre, edad, genero, correo, telefono, grupo, escuela, unidad, poblacion) 
                        VALUES (:nombre, :edad, :genero, :correo, :telefono, :grupo, :escuela, :unidad, :poblacion)";

            //Conectando base de datos
            self::getConexion();

            //Guardandolo en la variable
            $Ejecucion = self::$Conexion->prepare($Query);

            //Sustituyendo las plantillas dentro del arreglo 
            $DatosEstudiante = [

                ":nombre" => $Estudiante->getNombre(),
                ":edad" => $Estudiante->getEdad(),
                ':genero' => $Estudiante->getGenero(),
                ':correo' => $Estudiante->getCorreo(),
                ':telefono' => $Estudiante->getTelefono(),
                ':grupo' => $Estudiante->getGrupo(),
                ':escuela' => $Estudiante->getEscuela(),
                ':unidad' => $Estudiante->getUnidad(),
                ':poblacion' => $Estudiante->getPoblacion()

            ];

            //Ejecutando despues de sustituir con los parametros del arreglo
            $Ejecucion->execute($DatosEstudiante);


        }

    
        //Funcion para mostrar los datos de la base de datos
        public static function mostrarDatos(){

            //Seleccion de todos los estudiantes
            $Query = "SELECT * FROM students";

            //Conexion a la base
            self::getConexion();

            //Preparacion y ejecucion
            $Ejecucion = self::$Conexion->prepare($Query);
            $Ejecucion->execute();

            if($Ejecucion->rowCount() > 0){

                return $Ejecucion->fetchAll(PDO::FETCH_ASSOC);

            }else{

                return false;

            }

        }


        //Funcion para actualizar los datos de los alumnos
        public static function actualizarDatos($Estudiante){
            
            $Query = "UPDATE (nombre, edad, genero, correo, telefono, grupo, escuela, unidad, poblacion)
            FROM students SET () WHERE id = (:id)";
        
            self::getConexion();

            $Ejecucion = self::$Conexion->prepare($Query);
            $Ejecucion->execute();
            

            
        }


        //FUNCION PARA ELIMINAR DATOS
        public static function eliminarDatos($Estudiante){

            $Query = "DELETE FROM students WHERE id = :id";

            self::getConexion();

            $Ejecucion = self::$Conexion->prepare($Query);

            $DatosEstudiante = [":id" => $Estudiante->getId()];

 
            if($Ejecucion->Execute($DatosEstudiante)){
                echo '<div class="alert alert-success">Estudiante eliminado correctamente</div>';
            
            }else{
                echo '<div class="alert alert-danger">Error</div>';
                header("Location: informes.php");
            }

        }

    }

?>