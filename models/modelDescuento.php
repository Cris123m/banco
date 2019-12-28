<?php 
class modelDescuento{
    private $valor;
    private $tiempo;

    public function getValor()
    {
        return $this->valor;
    }
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getTiempo()
    {
        return $this->tiempo;
    }
    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;
    }

    public function descuentoSim($monto,$tiempo,$descuento){
        $descuentoSim = 0;
        $descuentoSim= ($monto * $tiempo * $descuento ) / 12 ;
        return  $descuentoSim;       
        }


    public function descuentoComer($montoi,$descuento){
        $descuentoComer = 0;
        $descuentoComer= $montoi *  $descuento  ;
        $descuentoComer1= $descuentoComer -  $montoi;
        return  $descuentoComer1;       
    }

    public function descuentoRacional($monto,$tiempo,$descuento){
        $descuentoRacional = 0;
        $descuentoRacional= $monto *$tiempo * $descuento ;
        return  $descuentoRacional;       
    }
    
	
}
