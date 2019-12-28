<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">

        <header class="major">
            <h2>Compras con tarjeta de crédito</h2>
            <p>Rellene los campos solicitados</p>
        </header>

        <a href="#" class="image fit"><img src="assets/images/credit-card.jpg" alt="" /></a>
        <?php include_once("controllers/controllerCredito.php") ?>
        <!-- Form -->
        <section>
            <h3>Descuento comercial</h3>
                <form method="post" action="#">
                <div class="row uniform 50%">
                    <div class="6u 12u$(4)">
                        <input type="text" name="monto" id="monto" value="<?php echo (isset($_POST['monto']))? $_POST['monto']:""; ?>" placeholder="Digite el monto" />
                    </div>
                    <div class="6u 12u$(4)">
                        <input type="text" name="tiempo" id="tiempo" value="<?php echo (isset($_POST['tiempo']))? $_POST['tiempo']:""; ?>" placeholder="Digite el tiempo" />
                    </div>
                    <div class="6u 12u$(4)">
                        <input type="text" name="porcentaje" id="porcentaje" value="<?php echo (isset($_POST['porcentaje']))? $_POST['porcentaje']:""; ?>" placeholder="Digite porcentaje de descuento" />
                    </div>
                    <div class="12u 12u$(4)">
                        <label for="vneto">Valor con descuento comercial</label>
                        <input type="text" name="vneto" id="vneto" value="<?php echo (isset($e))? money_format('%i', $e):""; ?>" readonly placeholder="" />
                    </div>
                </div>
                
                <center>
                <div class="4u 4u$(3)">
                    <ul class="actions fit">
                        <li><input class="button fit" type="submit" name="calcular" value="Calcular"></li>
                        <li><input class="button fit" type="button" id="limpiar" value="Limpiar"></li>
                        <li><a href="banca.php" class="button fit">Regresar</a></li>
                    </ul>
                </div>
                </center>
            </form>
        </section>
    </div>
</section>
<script>
    $("#limpiar").on("click",function(){
        $('input[type="text"]').val('');
    })
</script>