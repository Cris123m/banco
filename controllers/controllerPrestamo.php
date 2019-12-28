<?php 
setlocale(LC_MONETARY, 'en_US');
include_once "../models/modelPrestamo.php";
$prestamo = new modelPrestamo;
if(isset($_POST['calcular'])){
    $prestamo->setMonto($_POST['monto']);//En dólares
    $prestamo->setTaza(13);//En porcentaje
    $prestamo->setTiempo($_POST['plazo']);//En meses
    $interes=$prestamo->getMonto()*($prestamo->getTaza()/1200)*$prestamo->getTiempo();
    $vtotal=$prestamo->getMonto()+$interes;
    $vMes=$vtotal/$prestamo->getTiempo();    
    $vCuota=0;
    switch ($_POST['frecuencia']) {
        case '1':
            $vCuota=$vMes;
            break;
        case '2':
            $vCuota=$vMes*2;
            break;
        case '3':
            $vCuota=$vMes*3;
            break;
        case '4':
            $vCuota=$vMes*6;
            break;
        case '5':
            $vCuota=$vMes*12;
            break;
        case '6':
            $vCuota=$vtotal;
            break;
        
        default:
            # code...
            break;
    }
}
?>