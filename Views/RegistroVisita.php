<?php

    session_start();

    if(empty($_SESSION['usuario'])){

        header("Location: login.php");
        exit();
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Visita</title>
    <link rel="stylesheet" href="../Assets/css/RegistroVisita_styles.css">
    <link rel="shortcut icon" href="../Assets/img/Logo_Uas.ico">
    <link rel="stylesheet" type="text/css" href="../Assets/css/overhang.min.css" />
</head>
<body>
    
    <!--##################### BARRA DE NAVEGACION ########################-->

    <nav class="navbar">

        <div class="navdiv">

            <ul>

                <li> <a href="index.php">    <h2>Inicio</h2>             </a> </li>
                <li> <a href="#">    <h2>Ciclo escolar</h2>      </a> </li>
                <li> <a href="#">    <h2>Departamento</h2>       </a> </li>

            </ul>

        </div>

    </nav>

    <!--################### CONTENEDOR DEL FORMULARIO #######################-->
    <div class="form_container">

        <!--################# FORMULARIO ###################################-->
        <div class="form">

            <form action="../Controllers/ValidacionRegistro.php" method="post" class="form_itself" id="formestudiante">

                <h3>Nombre:</h3>
                <input type="text" name="nombre" id="" class="txtinput" required> <br>

                <h3>Edad:</h3>
                <input type="text" name="edad" id="" maxlength="2" class="txtinput" required> <br>


                <!-- ################         SELECT PARA EL GENERO         #################### -->
                <h3>Genero:</h3>
                <select class="form-select1" name="genero" required>

                    <option selected disabled>Seleccionar</option>

                    <option value="masculino">Masculino</option>

                    <option value="femenino">Femenino</option>

                    <option value="otro">Otro</option>

                </select> <br>


                <h3>Correo Electronico:</h3>
                <input type="email" name="correo" class="txtinput" required> <br>

                <h3>Telefono:</h3>
                <input type="tel" name="telefono" maxlength="10" class="txtinput" inputmode="numeric" required> <br>


                <!-- ###############       SELECT DISCAPACIDAD          ################ -->
                <h3>¿Se identifica con alguno de los siguientes grupos?:</h3>
                <select class="form-select2" name="grupo" required>

                    <option value="" selected disabled>Seleccionar</option>
                    <option value="Ceguera">Ceguera</option>
                    <option value="Baja vision">Baja vision</option>
                    <option value="Sordera">Sordera</option>
                    <option value="Hipoacusia">Hipoacusia</option>
                    <option value="Discapacidad motriz fisica">Discapacidad motriz fisica</option>
                    <option value="Discapacidad motriz neuromotora">Discapacidad motriz neuromotora</option>
                    <option value="Discapacidad intelectual">Discapacidad intelectual</option>
                    <option value="Sindrome de down">Sindrome de down</option>
                    <option value="Discapacidad multiple">Discapacidad multiple</option>
                    <option value="Deficit de atencion por hiperactividad">Deficit de atencion por hiperactividad</option>
                    <option value="Trastorno mental o psicosocial">Trastorno mental o psicosocial</option>
                    <option value="Autismo">Autismo</option>
                    <option value="Sindrome de Asperger">Sindrome de Asperger</option>
                    <option value="Sindrome de Reet">Sindrome de Reet</option>
                    <option value="Trastorno generalizado del desarrollo no especificado">Trastorno generalizado del desarrollo no especificado</option>
                    <option value="Problemas de conducta">Problemas de conducta</option>
                    <option value="Trastornos de aprendizaje en lectura (Dislexia)">Trastornos de aprendizaje en lectura (Dislexia)</option>
                    <option value="Trastorno de aprendizaje en matematicas (discalculia)">Trastorno de aprendizaje en matematicas (discalculia)</option>
                    <option value="Trastornos de aprendizaje en expresion escrita">Trastornos de aprendizaje en expresion escrita</option>
                    <option value="Diversidad cultural">Diversidad cultural</option>

                </select> <br>


                <!-- ##################    SELECT DE LA UNIDAD ACADEMICA ######################-->
                <h3>Unidad academica:</h3>
                <select class="form-select3" name="escuela" required>

                    <option selected disabled>Seleccionar</option>
                    <option value="Escuela preparatoria 2 de Octubre (culiacancito)">Escuela preparatoria 2 de Octubre (culiacancito)</option>
                    <option value="Escuela preparatoria 8 de Julio (El tamarindo)">Escuela preparatoria 8 de Julio (El tamarindo)</option>
                    <option value="Escuela preparatoria Augusto Cesar Sadino">Escuela preparatoria Augusto Cesar Sadino</option>
                    <option value="Escuela preparatoria Rafael Buelna Tenorio">Escuela preparatoria Rafael Buelna Tenorio</option>
                    <option value="Escuela preparatoria Carlos Marx (Costa rica)">Escuela preparatoria Carlos Marx (Costa rica)</option>
                    <option value="Escuela preparatoria Central diurna">Escuela preparatoria Central diurna</option>
                    <option value="Escuela preparatoria Central nocturna">Escuela preparatoria Central nocturna</option>
                    <option value="Escuela preparatoria hermanos Flores Magon">Escuela preparatoria hermanos Flores Magon</option>
                    <option value="Escuela preparatoria Dr. Salvador Allende">Escuela preparatoria Dr. Salvador Allende</option>
                    <option value="Escuela preparatoria Emiliano Zapata">Escuela preparatoria Emiliano Zapata</option>
                    <option value="Escuela preparatoria Genaro Vazquez (la palma)">Escuela preparatoria Genaro Vazquez (la palma)</option>
                    <option value="Escuela preparatoria Heraclio Bernal (Cosala)">Escuela preparatoria Heraclio Bernal (Cosala)</option>
                    <option value="Escuela preparatoria la cruz">Escuela preparatoria la cruz</option>
                    <option value="Escuela preparatoria Quila">Escuela preparatoria Quila</option>
                    <option value="Escuela preparatoria semiescolarizada">Escuela preparatoria semiescolarizada</option>
                    <option value="Escuela preparatoria Victoria del pueblo">Escuela preparatoria Victoria del pueblo</option>
                    <option value="Escuela preparatoria Vladimir I. Lenin">Escuela preparatoria Vladimir I. Lenin</option>
                    <option value="Escuela preparatoria Badiraguato">Escuela preparatoria Badiraguato</option>
                    <option value="Centro de estudio de idiomas Culiacan">Centro de estudio de idiomas Culiacan</option>
                    <option value="Centro de estudio de idiomas Navolato">Centro de estudio de idiomas Navolato</option>
                    <option value="Centro de investigacion y docencia en ciencia de la salud (CIDOCS)">Centro de investigacion y docencia en ciencia de la salud (CIDOCS)</option>
                    <option value="Unidad academica de criminalistica, criminologia y ciencias forenses">Unidad academica de criminalistica, criminologia y ciencias forenses</option>
                    <option value="Unidad Académica de Artes (Música)">Unidad Académica de Artes (Música)</option>
                    <option value="Escuela de Diseño y Artes Visuales">Escuela de Diseño y Artes Visuales</option>
                    <option value="Escuela de Ciencias Antropológicas">Escuela de Ciencias Antropológicas</option>
                    <option value="Facultad de Biología">Facultad de Biología</option>
                    <option value="Facultad de Ciencias de la Tierra y el Espacio">Facultad de Ciencias de la Tierra y el Espacio</option>
                    <option value="Facultad de Ciencias Físico Matemáticas">Facultad de Ciencias Físico Matemáticas</option>
                    <option value="Facultad de Filosofía y Letras">Facultad de Filosofía y Letras</option>
                    <option value="Facultad de Ciencias de la Nutrición y Gastronomía">Facultad de Ciencias de la Nutrición y Gastronomía</option>
                    <option value="Facultad de Derecho Culiacán">Facultad de Derecho Culiacán</option>
                    <option value="Facultad de Derecho Ext. Navolato">Facultad de Derecho Ext. Navolato</option>
                    <option value="Facultad de Educación Física y Deporte">Facultad de Educación Física y Deporte</option>
                    <option value="Facultad de Arquitectura">Facultad de Arquitectura</option>
                    <option value="Facultad de Ciencias de la Educación">Facultad de Ciencias de la Educación</option>
                    <option value="Facultad de Informática Culiacán">Facultad de Informática Culiacán</option>
                    <option value="Escuela de Informática Navolato">Escuela de Informática Navolato</option>
                    <option value="Facultad de Estudios Internacionales y Políticas Públicas">Facultad de Estudios Internacionales y Políticas Públicas</option>
                    <option value="Facultad de Agronomía">Facultad de Agronomía</option>
                    <option value="Facultad de Agronomía Ext. La Cruz">Facultad de Agronomía Ext. La Cruz</option>
                    <option value="Facultad de Medicina Veterinaria y Zootecnia">Facultad de Medicina Veterinaria y Zootecnia</option>
                    <option value="Facultad de Odontología">Facultad de Odontología</option>
                    <option value="Facultad de Ciencias Económicas y Sociales">Facultad de Ciencias Económicas y Sociales</option>
                    <option value="Facultad de Enfermería Culiacán">Facultad de Enfermería Culiacán</option>
                    <option value="Facultad de Historia">Facultad de Historia</option>
                    <option value="Facultad de Ingeniería">Facultad de Ingeniería</option>
                    <option value="Facultad de Medicina Campus 1">Facultad de Medicina Campus 1</option>
                    <option value="Facultad de Medicina Campus 2">Facultad de Medicina Campus 2</option>
                    <option value="Facultad de Psicología Culiacán">Facultad de Psicología Culiacán</option>
                    <option value="Facultad de Trabajo Social Culiacán">Facultad de Trabajo Social Culiacán</option>
                    <option value="Facultad de Contaduría y Administración">Facultad de Contaduría y Administración</option>
                    <option value="Facultad de Ciencias de la Comunicación">Facultad de Ciencias de la Comunicación</option>
                    <option value="Facultad de Ciencias Químico Biológicas">Facultad de Ciencias Químico Biológicas</option>
                    <option value="Centro de Atención Estudiantil URC">Centro de Atención Estudiantil URC</option>
                    <option value="Vicerrectoría URC">Vicerrectoría URC</option>
                    <option value="Secretaría Académica Universitaria">Secretaría Académica Universitaria</option>
                    <option value="Otra Unidad Académica u Organizacional">Otra Unidad Académica u Organizacional</option>


                </select> <br>
            

                <!-- ################## SELECT DE LA UNIDAD A LA QUE SE DIRIGE ###################-->
                <h3>Unidad dirigida:</h3>
                <select name="unidad" id="" required>
                    <option value="" selected disabled>Seleccionar</option>

                    <option value="Coordinacion">Coordiacion</option>

                    <option value="Audicion y lenguaje">Audicion y lenguaje</option>

                    <option value="Psicologia">Psicologia</option>

                    <option value="Tiflotecnologias">Tiflotecnologias</option>

                    <option value="Psicopedagogia">Psicopedagogia</option>

                    <option value="Asesorias academicas y material adaptado">Asesorias academicas y material adaptado</option>

                    <option value="Operatividad y logistica">Operatividad y logistica</option>

                </select>

                <!-- ################# SELECT POBLACION DE ATENCION ###########################-->
                <h3>Poblacion de atencion:</h3>
                <select name="poblacion" id="" required>
                    <option value="" selected disabled>Seleccionar</option>

                    <option value="Estudiante">Estudiante</option>

                    <option value="Padres/Tutor">Padres / Tutor familiar</option>

                    <option value="Responsable de tutorias">Responsable de Tutorías</option>

                    <option value="Tutor de apoyo especializado">Tutor de Apoyo Especializado</option>

                    <option value="Docente">Docente</option>

                    <option value="Unidad Academica">Unidad Académica</option>

                    <option value="Dependencia uas">Dependencias UAS</option>

                    <option value="Externo">Externo</option>


                </select> <br>

                <br>
                <input type="checkbox" name="" id="" value="Seguimiento de caso">
                <label for="">Seguimiento de caso</label> <br>

                <input type="checkbox" name="" id="" value="Entrega de PACyM">
                <label for="">Entrega de PACyM</label><br>

                <input type="checkbox" name="" id="" value="Solicitar talleres">
                <label for="">Solicitar talleres</label><br>

                <input type="checkbox" name="" id="" value="otro">
                <label for="">Otro</label>

                <br><br><br>

                <input type="checkbox" name="" id="" value="He leido el aviso de privacidad">
                <label for=""><a href="" class="terminos">He leido el aviso de privacidad</a></label>

                <br><br>
                
                <input type="submit" value="Guardar" class="btn">

            </form>

        </div>


    </div>

    <!--#################### FOOTER DE LA PAGINA ###########################-->
    <div class="footer">

        <footer>

           &copy; 2025 Programa ADIUAS — Universidad Autónoma de Sinaloa

        </footer>

    </div>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!--<script>
        if (window.history.replaceState) {
           
            window.history.replaceState(null, null, window.location.href);
        }
    </script>-->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../Assets/js/overhang.min.js"></script>
    <script src="..\Assets\js\app.js"></script>

</body>
</html>

