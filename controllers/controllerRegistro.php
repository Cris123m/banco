<?php 
include "../models/modelUser.php";
$user = new modelUser();

if(isset($_REQUEST['user'])){   
    $user->setUser($_REQUEST['user']);
    $user->setPassword($_REQUEST['password']);
    $usu=$user->Registrar($user);
    if($usu!=-1){
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