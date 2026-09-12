const poblacion = document.getElementById( "1" );
const unidad = document.getElementById( "2" );
const escuela = document.getElementById( "3" );
const buscar = document.getElementById( "search" );


buscar.addEventListener('click', function () {
    // La variable que va a extraer de la BD para el filtro
    // variable.value es para extraer el valor del ID selecciónado
    console.log(poblacion.value);
});

