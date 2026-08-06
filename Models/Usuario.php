<?php

class Usuario{

    //Parametros del usuario
    private $Id;
    private $Usuario;
    private $Password;

    public function getId(){
		return $this->Id; 
	}

	public function setId($Id){
		$this->Id = $Id;
	}

	public function getUsuario(){
		return $this->Usuario;
	}

	public function setUsuario($Usuario){
		$this->Usuario = $Usuario;
	}

	public function getPassword(){
		return $this->Password;
	}

	public function setPassword($Password){
		$this->Password = $Password;
	}

}

?>