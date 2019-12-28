<?php 
setlocale(LC_MONETARY, 'en_US');
if(isset($_POST['calcular'])){
    $monto=$_POST['monto'];
    $tiempo=$_POST['tiempo'];
    $porcentaje=$_POST['porcentaje'];
    $e=$monto-($monto*($tiempo/12)*($porcentaje/100));
}
?>