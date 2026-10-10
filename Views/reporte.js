const poblacion = document.getElementById( "1" );
const unidad = document.getElementById( "2" );
const escuela = document.getElementById( "3" );
const genero = document.getElementById( "4" );
const edad = document.getElementById( "5" );
const vulnerabilidad = document.getElementById( "6" );
const buscar = document.getElementById( "search" );
const lista = document.getElementById('listaUsuarios');


buscar.addEventListener('click', function () {
    // La variable que va a extraer de la BD para el filtro
    // variable.value es para extraer el valor del ID selecciónado
    let url = 'http://localhost:3000/usuarios?';
   
    if( vulnerabilidad && vulnerabilidad.value !== "0" ) url += `vulnerabilidad=${ vulnerabilidad.value }&`;
    if( poblacion && poblacion.value !== "0" ) url += `poblacion=${ poblacion.value }&`;
    if( unidad && unidad.value !== "0" ) url += `unidad=${ unidad.value }&`;
    if( escuela && escuela.value !== "0" ) url += `escuela=${ escuela.value }&`;
    if( genero && genero.value !== "0" ) url += `genero=${ genero.value }&`;
    if( edad && edad.value !== "0" ) url += `edad=${ parseInt(edad.value) }&`;

    
    console.log(url);
      fetch(url)
        .then(res => res.json())
        .then(data => {
            const lista = document.getElementById('listaUsuarios');
            lista.innerHTML = '';

            data.forEach(user => {
                const li = document.createElement('li');
                li.textContent = `${user.nombre} - ${user.edad} - ${user.genero} - ${user.poblacion}`;
                lista.appendChild(li);
            });
        }) .catch(err => console.error(err));  
});

