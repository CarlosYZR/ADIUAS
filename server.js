const express = require( 'express' );
const mysql = require( 'mysql2' );
const cors = require( 'cors' );
const app = express();

app.use(express.json());
app.use(cors());

//Conexión con ESECULITO
const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '123456789',
    database: 'adiuas'
})

connection.connect( err=>{
    if(err){
        console.log( 'error de conexión', err );
        return;
    }
    console.log( "Jalo la conexion a SQL pero bien cabron" );
});

//Ruta de prueba
app.get('/', (req, res) => {
    res.send('servidor en pleno funcionamiento');
});

//ruta para consultar datos
app.get('/usuarios', (req, res) => {
    const { vulnerabilidad, poblacion, unidad, escuela, genero, edad } = req.query;

    let query = "SELECT * FROM adiuas.students WHERE 1 = 1";

    if( vulnerabilidad ) query += ` AND vulnerabilidad_id = `+vulnerabilidad;
    if( poblacion ) query += ` AND poblacion_id = `+poblacion;
    if( unidad ) query +=  ` AND unidad_id = `+unidad;
    if( escuela ) query += ` AND escuela_id = `+escuela;
    if( genero ) if(genero == 1) query += ` AND genero = 'masculino'`; else query += ` AND genero = 'femenino'`;
    if( edad ) query += ` AND edad = `+edad;

    //query += ' LIMIT 10';
    connection.query( query, (err, results) => {
        if(err){
            res.status(500).send(err);
            return;
        }
        res.json(results);
    });
});

//Levantar el servidor
app.listen(3000, ()=>{
    console.log('Servidor en http://localhost:3000');
});