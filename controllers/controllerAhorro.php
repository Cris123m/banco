<?php 
setlocale(LC_MONETARY, 'en_US');
include_once "models/modelAhorro.php";
$ahorro = new modelAhorro;
if(isset($_POST['calcular'])){
    $ahorro->setValor($_POST['monto']);
    $ahorro->setPlazo($_POST['plazo']);
    $vFuturo=$ahorro->getValor()*(1+0.05*$ahorro->getPlazo());    
}
?>