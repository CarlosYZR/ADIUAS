const poblacion = document.getElementById( "1" );
const unidad = document.getElementById( "2" );
const escuela = document.getElementById( "3" );
const genero = document.getElementById( "4" );
const edad = document.getElementById( "5" );
const vulnerabilidad = document.getElementById( "6" );
const buscar = document.getElementById( "search" );

buscar.addEventListener('click', function () {
    // La variable que va a extraer de la BD para el filtro
    // variable.value es para extraer el valor del ID selecciónado
    const queryPOB = "select * from adiuas.poblacion where id = '";
    console.log(queryPOB + poblacion.value + "'");
    
});

