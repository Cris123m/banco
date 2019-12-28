<?php 
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Banco Innovador</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/skel-layers.min.js"></script>
		<script src="assets/js/init.js"></script>
			<link rel="stylesheet" href="assets/css/skel.css" />
			<link rel="stylesheet" href="assets/css/style.css" />
            <link rel="stylesheet" href="assets/css/style-xlarge.css" />
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
            
	</head>
	<body <?php echo ($_SERVER["REQUEST_URI"]=="/" || $_SERVER["REQUEST_URI"]=="/banco/index.php") ? "class='landing'":""; ?> >
        
        <!-- Header -->           
			<header id="header">
				<h1><a href="index.php">Banco Innovador</a></h1>
				<nav id="nav">
					<ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="interes.php">Interés</a></li>
                        <li><a href="capital.php">Capital</a></li>
                        <li><a href="tasas.php">Tasas de interés</a></li>
                        <li><a href="registrar.php">Registrarse</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle button special" href="#" id="navbarDropdownMenuLink" role="button" <?php echo (isset($_SESSION['user'])) ? "data-toggle='dropdown'":"data-target='#loginModal' data-toggle='modal'"; ?>  aria-haspopup="true" aria-expanded="false">
                                <?php echo (!isset($_SESSION['user'])) ? "Banca digital":$_SESSION['user']; ?>
                            </a>
                            <?php if(isset($_SESSION['user'])){ ?>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <button type="button" class="btn btn-secondary" class="dropdown-item"  id="signOut">Cerrar Sesión</button>
                            </div>
                            <?php } ?>
                        </li>
					</ul>
				</nav>
            </header>
            
            <!-- Modal -->
            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <form>
                    <div class="modal-body">                    
                        <div class="form-group">
                            <label for="user">Usuario</label>
                            <input type="text" class="form-control" name="user" id="user" placeholder="Ingrese usuario">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese contraseña">
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" id="submitLogin" class="btn btn-primary">Iniciar Sesión</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            <script>                
                $("#submitLogin").on("click",function(){
                    var user = $("#user").val();
                    var password = $("#password").val();
                    //Paso valores por Ajax a php
                    datos = {user:user, password:password};                                    
                    $.ajax({
                        async:false,
                        cache:false,
                        url: "controllers/controllerUser.php",
                        type: "POST",
                        dataType: 'JSON',
                        data: datos
                    }).done(function(respuesta){
                        if (respuesta.estado === "ok") {
                            alert("Bienvenido "+user);
                            window.location.href = "banca.php";
                        }else{
                            alert("Error en usuario y/o contraseña");
                        }
                    });      
                });
                $("#signOut").on("click",function(){
                    //Paso valores por Ajax a php
                    datos = {user:""};                                    
                    $.ajax({
                        async:false,
                        cache:false,
                        url: "controllers/controllerSignOut.php",
                        type: "POST",
                        dataType: 'JSON',
                        data: datos
                    }).done(function(respuesta){
                        if (respuesta.estado === "ok") {
                            alert("Ha cerrado sesión ");
                            window.location.href = "index.php";
                        }else{
                            alert("Error al cerrar sesión");
                        }
                    });  
                });
                $("#navbarDropdownMenuLink").on("click",function(){
                    var user = $(this).text().trim();
                    if(user == "Banca digital"){
                        $("#loginModal").modal("show");
                    }else{
                        $("#dropdown-menu").dropdown('toggle');
                    }
                    
                });
            </script>