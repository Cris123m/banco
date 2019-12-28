<?php 
setlocale(LC_MONETARY, 'en_US');
if(isset($_POST['calcular'])){
    $monto=$_POST['monto'];
    $plazo=$_POST['plazo'];
    //D = ( Co * d * t ) / (1 + d * t)
    $td=0.30;
    $d=($monto*$td*($plazo/12))/(1+$td*($plazo/12));
    $vMes=$monto/$plazo;
    $vNeto=$monto-$d;
}
?>