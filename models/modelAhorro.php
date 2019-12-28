<?php 
class modelAhorro{
	
    private $user;
    private $valor;
    private $plazo;

    public function getUser()
    {
        return $this->user;
    }
    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getValor()
    {
        return $this->valor;
    }
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getPlazo()
    {
        return $this->plazo;
    }
    public function setPlazo($plazo)
    {
        $this->plazo = $plazo;
    }


    
}
