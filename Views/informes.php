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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiuas | Informes</title>
    <link rel="shortcut icon" href="../Assets/img/Logo_Uas.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../Assets/css/index.css">
</head>
<body>


    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../assets/img/adiuas.png" class="logo" height="77px" width="200px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="../index.php"><h2 class="item">Inicio</h2></a>
                    </li>

                    <li class="nav-item">
                        <a href="informes.php"><h2 class="item">Informes</h2></a>
                    </li>
                  
      
                    <li class="nav-item">
                        <a href="RegistroVisita.php"><h2 class="item">Registrar visita</h2></a>
                    </li>

                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                          
                            <a href="" data-bs-toggle="dropdown"><h2>Unidades</h2></a>
                              
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><h3>Operatividad y logistica</h3></a></li>
                                <li><a class="dropdown-item" href="#"><h3>Tiflotecnologias</h3></a></li>
                                <li><a class="dropdown-item" href="#"><h3>Psicopedagogia</h3></a></li>
                                <li><a class="dropdown-item" href="#"><h3>Audicion y lenguaje</h3></a></li>
                                <li><a class="dropdown-item" href="#"><h3>Psicologia</h3></a></li>
                                <li><a class="dropdown-item" href="#"><h3>Asesorias academicas y creacion de material adaptado</h3></a></li>
      
                            </ul>
                        </li>
                    </ul>
      
                </ul>
                    
        <a href="../Controllers/CerrarSesion.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
            </svg>
        </a> &nbsp;&nbsp;&nbsp;
        <a href="../Controllers/CerrarSesion.php"><h2>  <?php  echo $_SESSION['usuario'];  ?>  </h2></a>
    </nav>




    <script>
        function eliminar(){
            var respuesta = confirm("¿Esta seguro que desea eliminar el alumno?");
            return respuesta;
        }
    </script>
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>



<?php
    
    if($estudiantes) {
?>
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">correo</th>
                <th scope="col">Poblacion</th>
                <th scope="col">Unidad</th>
                <th scope="col">Genero</th>
                <th scope="col">Edad</th>
                <th scope="col">Situacion de vulnerabilidad</th>
                <th scope="col">Telefono</th>
                <th scope="col">Escuela</th>
                <th scope="col">Modificar</th>
            </tr>
        </thead>
        
        <?php  foreach($estudiantes as $fila) {  ?>

        <tbody>
            <tr>
                <th scope="row"> <?php echo $fila['id']; ?> </th>
                <td> <?php echo $fila['nombre']; ?> </td>
                <td> <?php echo $fila['correo']; ?> </td>
                <td> <?php echo $fila['poblacion']; ?></td>
                <td> <?php echo $fila['unidad']; ?></td>
                <td> <?php echo $fila['genero']; ?></td>
                <td> <?php echo $fila['edad']; ?></td>
                <td> <?php echo $fila['grupo']; ?></td>
                <td> <?php echo $fila['telefono']; ?></td>
                <td> <?php echo $fila['escuela']; ?></td>
                <td>
                    <a href="actualizarEstudiante.php" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                    <a onclick="return eliminar()" href="informes.php?id=<?= $fila['id'];?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
                    
            <?php } ?>

        </tbody>
    </table>  

    <?php

        if(!empty($_GET['id'])){

            $id = $_GET['id'];
            EstudianteControlador::eliminarDatos($id);

        }

    }else{

        echo "No hay datos que mostrar";
        
    }

?>
