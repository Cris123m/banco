<?php 
class modelPer{	
    private $nombre;
    private $apellido;
    private $edad;
    private $cedula;
    private $ciudad;
    private $telefono;


	public function getNombre(){
		return $this->nombre;
	}
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getApellido(){
		return $this->apeliido;
	}
	public function setApellido($apellido){
		$this->apellido = $apellido;
    }

    public function getEdad(){
		return $this->edad;
	}
	public function setEdad($edad){
		$this->edad = $edad;
    }

    public function getCedula(){
		return $this->cedula;
	}
	public function setCedula($cedula){
		$this->cedula = $cedula;
    }

    public function getCiudad(){
        return $this->ciudad;
	}
	public function setCiudad($ciudad){
		$this->ciudad = $ciudad;
    }
    
    public function getTelefono(){
        return $this->telefono;
	}
	public function setTelefono($telefono){
		$this->telefono = $telefono;
    }
}