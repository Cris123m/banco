<?php 
include "../models/modelUser.php";
$user = new modelUser();

/* $user->setUser("Usuario");
$user->setPassword("hola123"); */
if(isset($_REQUEST['user'])){
    if(!isset($_SESSION)){
        session_start();
        $_SESSION['user']="";
    }
    $usuario=$_REQUEST['user'];
    $clave=$_REQUEST['password'];
    $usu=$user->Obtener($usuario,$clave);
    if($usu){
        $_SESSION['user']=$usuario;
        //Si el usuario y pass coincide, manda un msj de ok
        $datos = array(
            'estado' => 'ok'
            );        
    }else{
        $datos = array(
            'estado' => 'error'
            );
    }
    //Devolvemos el array pasado a JSON como objeto
    echo json_encode($datos, JSON_FORCE_OBJECT);
}
?>