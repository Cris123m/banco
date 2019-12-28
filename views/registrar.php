<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">

        <header class="major">
            <h2>Registrar usuario</h2>
        </header>

        <!-- Form -->
        <section>
            <h3>Ingrese los siguientes datos</h3>
                <form method="post" action="#">
                <div class="row uniform 50%">
                    <div class="12u 12u$(4)">
                        <label for="user" >Ingrese el Usuario</label>
                        <input type="text" name="userr" id="userr" value="" placeholder="Usuario" />
                    </div>
                    <div class="12u 12u$(4)">
                        <label for="pass">Ingrese su Contraseña</label>
                        <input type="text" name="pass" id="pass" value="" placeholder="Contraseña" />
                    </div>
                    
                </div>
                <br>
            
            <center>
                <div class="4u 4u$(3)">
                    
                    <ul class="actions fit">
                        <li><input class="button fit" type="button" id="registrar" name="registrar" value="Registrar"></li>
                        <li><input class="button fit" type="button" id="login" value="Iniciar Sesión" data-toggle="modal" data-target="#loginModal"></li>
                        
                    </ul>
                </div>
            </center>
            </form>
        </section>
    </div>
</section>
<script>
$("#registrar").on("click",function(){
    var user = $("#userr").val();
    var password = $("#pass").val();
    //Paso valores por Ajax a php
    datos = {user:user, password:password};                                    
    $.ajax({
        async:false,
        cache:false,
        url: "controllers/controllerRegistro.php",
        type: "POST",
        dataType: 'JSON',
        data: datos
    }).done(function(respuesta){
        if (respuesta.estado === "ok") {
            alert("Se ha registrado correctamente "+user);
            window.location.href = "index.php";
        }else{
            alert("Error al registrar");
        }
    });      
});
</script>