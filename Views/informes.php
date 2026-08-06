<?php

    include("../Controllers/EstudianteControlador.php");

    $estudiantes = EstudianteControlador::mostrarDatos();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiuas | Informes</title>
    <link rel="shortcut icon" href="../Assets/img/Logo_Uas.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
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

    } else {
        echo "No hay datos que mostrar";
    }

?>
