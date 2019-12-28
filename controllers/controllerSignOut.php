<?php 
if(!isset($_SESSION)){
    session_start();
        unset($_SESSION['user']);
    $datos = array(
        'estado' => 'ok'
        ); 
    echo json_encode($datos, JSON_FORCE_OBJECT);
}
?>