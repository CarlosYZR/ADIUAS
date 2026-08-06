<?php


class Estudiante{

	//Parametros del estudiante
    private $Id;
    private $Nombre;
    private $Edad;
    private $Correo;
    private $Genero;
    private $Telefono;
    private $Grupo;
    private $Escuela;
    private $Unidad;
    private $Poblacion;


	//Vaina y media

    public function getId(){
		return $this->Id;
	}

	public function setId($Id){
		$this->Id = $Id;
	}

	public function getNombre(){
		return $this->Nombre;
	}

	public function setNombre($Nombre){
		$this->Nombre = $Nombre;
	}

	public function getEdad(){
		return $this->Edad;
	}

	public function setEdad($Edad){
		$this->Edad = $Edad;
	}

	public function getCorreo(){
		return $this->Correo;
	}

	public function setCorreo($Correo){
		$this->Correo = $Correo;
	}

	public function getGenero(){
		return $this->Genero;
	}

	public function setGenero($Genero){
		$this->Genero = $Genero;
	}

	public function getTelefono(){
		return $this->Telefono;
	}

	public function setTelefono($Telefono){
		$this->Telefono = $Telefono;
	}

	public function getGrupo(){
		return $this->Grupo;
	}

	public function setGrupo($Grupo){
		$this->Grupo = $Grupo;
	}

	public function getEscuela(){
		return $this->Escuela;
	}

	public function setEscuela($Escuela){
		$this->Escuela = $Escuela;
	}

	public function getUnidad(){
		return $this->Unidad;
	}

	public function setUnidad($Unidad){
		$this->Unidad = $Unidad;
	}

	public function getPoblacion(){
		return $this->Poblacion;
	}

	public function setPoblacion($Poblacion){
		$this->Poblacion = $Poblacion;
	}



}

    

?>