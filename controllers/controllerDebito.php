<?php 
setlocale(LC_MONETARY, 'en_US');
if(isset($_POST['calcular'])){
    $monto=$_POST['monto'];
    $porcentaje=$_POST['establecimiento'];
    $descuento=$monto*($porcentaje/100);    
    $vneto=$monto-$descuento;
}
?>