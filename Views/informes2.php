<?php
    session_start();
    include("../Controllers/EstudianteControlador.php");
    if(!empty($_SESSION['usuario'])){
        $estudiantes = EstudianteControlador::mostrarDatos();
    }else{

        header("Location: ../Views/login.php");
        exit();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adiuas | Informes</title>
    <link rel="shortcut icon" href="../Assets/img/Logo_Uas.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/prueba.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="filter"><!-- Div donde se mostrara la los filtros -->
            <div><!-- Escolar -->
                <h3>Población</h3>
                <select name="" id="1"><!-- Población -->
                    <option selected disabled>Seleccionar</option>
                    <option value="1">Estudiante</option>
                    <option value="2">Padres / Tutor familiar</option>
                    <option value="3">Responsable de Tutorías</option>
                    <option value="4">Tutor de Apoyo Especializado</option>
                    <option value="5">Docente</option>
                    <option value="6">Unidad Académica</option>
                    <option value="7">Dependencias UAS</option>
                    <option value="8">Externo</option>
                </select>
                <h3>Unidad Academica</h3>
                <select name="" id="2"><!-- Unidad -->
                    <option selected disabled>Seleccionar</option>
                    <option value="1">Coordiacion</option>
                    <option value="2">Audicion y lenguaje</option>
                    <option value="3">Psicologia</option>
                    <option value="4">Tiflotecnologias</option>
                    <option value="5">Psicopedagogia</option>
                    <option value="6">Asesorias academicas y material adaptado</option>
                    <option value="7">Operatividad y logistica</option>
                </select>
                <h3>Escuela</h3>
                <select name="" id="3"><!-- Escuela -->
                    <option selected disabled>Seleccione</option>
                    <option value="1">Escuela preparatoria 2 de Octubre ( culiacancito )</option>
                    <option value="2">Escuela preparatoria 8 de Julio ( El tamarindo )</option>
                    <option value="3">Escuela preparatoria Augusto Cesar Sadino</option>
                    <option value="4">Escuela preparatoria Rafael Buelna Tenorio</option>
                    <option value="5">Escuela preparatoria Carlos Marx (Costa rica)</option>
                    <option value="6">Escuela preparatoria Central diurna</option>
                    <option value="7">Escuela preparatoria Central nocturna</option>
                    <option value="8">Escuela preparatoria hermanos Flores Magon</option>
                    <option value="9">Escuela preparatoria Dr. Salvador Allende</option>
                    <option value="10">Escuela preparatoria Emiliano Zapata</option>
                    <option value="11">Escuela preparatoria Genaro Vazquez (la palma)</option>
                    <option value="12">Escuela preparatoria Heraclio Bernal (Cosala)</option>
                    <option value="13">Escuela preparatoria la cruz</option>
                    <option value="14">Escuela preparatoria Quila</option>
                    <option value="15">Escuela preparatoria semiescolarizada</option>
                    <option value="16">Escuela preparatoria Victoria del pueblo</option>
                    <option value="17">Escuela preparatoria Vladimir I. Lenin</option>
                    <option value="18">Escuela preparatoria Badiraguato</option>
                    <option value="19">Centro de estudio de idiomas Culiacan</option>
                    <option value="20">Centro de estudio de idiomas Navolato</option>
                    <option value="21">Centro de investigacion y docencia en ciencia de la salud (CIDOCS)</option>
                    <option value="22">Unidad academica de criminalistica, criminologia y ciencias forenses</option>
                    <option value="23">Unidad Académica de Artes (Música)</option>
                    <option value="24">Escuela de Diseño y Artes Visuales</option>
                    <option value="25">Escuela de Ciencias Antropológicas</option>
                    <option value="26">Facultad de Biología</option>
                    <option value="26">Facultad de Ciencias de la Tierra y el Espacio</option>
                    <option value="27">Facultad de Ciencias Físico Matemáticas</option>
                    <option value="28">Facultad de Filosofía y Letras</option>
                    <option value="29">Facultad de Ciencias de la Nutrición y Gastronomía</option>
                    <option value="30">Facultad de Derecho Culiacán</option>
                    <option value="31">Facultad de Derecho Ext. Navolato</option>
                    <option value="32">Facultad de Educación Física y Deporte</option>
                    <option value="33">Facultad de Arquitectura</option>
                    <option value="34">Facultad de Ciencias de la Educación</option>
                    <option value="35">Facultad de Informática Culiacán</option>
                    <option value="36">Escuela de Informática Navolato</option>
                    <option value="37">Facultad de Estudios Internacionales y Políticas Públicas</option>
                    <option value="38">Facultad de Agronomía</option>
                    <option value="39">Facultad de Agronomía Ext. La Cruz</option>
                    <option value="40">Facultad de Medicina Veterinaria y Zootecnia</option>
                    <option value="41">Facultad de Odontología</option>
                    <option value="42">Facultad de Ciencias Económicas y Sociales</option>
                    <option value="43">Facultad de Enfermería Culiacán</option>
                    <option value="44">Facultad de Historia</option>
                    <option value="45">Facultad de Ingeniería</option>
                    <option value="46">Facultad de Medicina Campus 1</option>
                    <option value="47">Facultad de Medicina Campus 2</option>
                    <option value="48">Facultad de Psicología Culiacán</option>
                    <option value="49">Facultad de Trabajo Social Culiacán</option>
                    <option value="50">Facultad de Contaduría y Administración</option>
                    <option value="51">Facultad de Ciencias de la Comunicación</option>
                    <option value="52">Facultad de Ciencias Químico Biológicas</option>
                    <option value="53">Centro de Atención Estudiantil URC</option>
                    <option value="54">icerrectoría URC</option>
                    <option value="55">Secretaría Académica Universitaria</option>
                    <option value="56">Otra Unidad Académica u Organizacional</option>
                </select>
            </div>
            <div><!-- Personal -->
                <h3>Genero</h3>
                <select name="" id="4"><!--Genero-->
                    <option selected disabled >Seleccione</option>
                    <option value="1">Hombre</option>
                    <option value="2">Mujer</option>
                </select>
                <h3>Edad</h3>
                <input type="number" id="age">
                <h3>Situación de Vulnerabilidad</h3>
                <select name="" id="6"><!-- Situación de Vulnerabilidad -->
                    <option selected disabled>Seleccionar</option>
                    <option value="1">Ceguera</option>
                    <option value="2">Baja vision</option>
                    <option value="3">Sordera</option>
                    <option value="4">Hipoacusia</option>
                    <option value="5">Discapacidad motriz fisica</option>
                    <option value="6">Discapacidad motriz neuromotora</option>
                    <option value="7">Discapacidad intelectual</option>
                    <option value="8">Sindrome de down</option>
                    <option value="9">Discapacidad multiple</option>
                    <option value="10">Deficit de atencion por hiperactividad</option>
                    <option value="11">Trastorno mental o psicosocial</option>
                    <option value="12">Autismo</option>
                    <option value="13">Sindrome de Asperger</option>
                    <option value="14">Sindrome de Reet</option>
                    <option value="15">Trastorno generalizado del desarrollo no especificado</option>
                    <option value="16">Problemas de conducta</option>
                    <option value="17">Trastornos de aprendizaje en lectura (Dislexia)</option>
                    <option value="18">Trastorno de aprendizaje en matematicas (discalculia)</option>
                    <option value="19">Trastornos de aprendizaje en expresion escrita</option>
                    <option value="20">Diversidad cultural</option>
                </select>
            </div>
            <button id="search">Buscar</button>
        </div>
        <div ><!-- Div donde se mostrara la tabla -->
        </div>
    </div>
    <script src="reporte.js"></script>
</body>
</html>
