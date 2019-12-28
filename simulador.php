<?php 
include_once "views/header.php";

if(isset($_GET['tramites'])){
    $tramites=$_GET['tramites'];
    switch ($tramites) {
        case 'prestamos':
            include_once "views/simulador.php";
            break;
        case 'cAhorros':
            include_once "views/cAhorros.php";
            break;
        case 'compraDebito':
            include_once "views/cDebito.php";
            break;
        case 'compraCredito':
            include_once "views/cCredito.php";
            break;
        case 'prestamoHipotecario':
            include_once "views/prestamoHip.php";
            break;
        default:
            include_once "views/simulador.php";
            break;
    }
}

include_once "views/footer.php";
?>