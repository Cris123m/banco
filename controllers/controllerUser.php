<?php 
include "../models/modelUser.php";
$user = new modelUser();
$user->setUser("Usuario");
$user->setPassword("hola123");
if(isset($_REQUEST['user'])){
    if(!isset($_SESSION)){
        session_start();
        $_SESSION['user']="";
    }
    $usuario=$_REQUEST['user'];
    $clave=$_REQUEST['password'];
    if($usuario == $user->getUser() && $clave == $user->getPassword()){
        $_SESSION['user']=$usuario;
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