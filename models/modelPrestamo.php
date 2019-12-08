<?php 
class modelPrestamo{
	
    private $monto;
    private $taza;
    private  $tiempo;
    

    public function getMonto()
    {
        return $this->monto;
    }
    public function setMonto($monto)
    {
        $this->monto = $monto;
    }

    public function getTiempo()
    {
        return $this->tiempo;
    }
    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;
    }

    public function getTaza()
    {
        return $this->taza;
    }
    public function setTaza($taza)
    {
        $this->taza = $taza;
    }

    public function __construct(){

    }
    
    public function calcularInteres($monto,$taza,$tiempo){
        $prestamo = 0;
        $prestamos = $monto / $tiempo * $taza  ;
        return $prestamo;
       
    }

}
?>