<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">

        <header class="major">
            <h2>Cuenta de ahorros</h2>
            <p>Rellene los campos solicitados</p>
        </header>

        <a href="#" class="image fit"><img src="assets/images/money.jpg" alt="" /></a>
        <?php include_once("controllers/controllerAhorro.php"); ?>
        <!-- Form -->
        <section>
            <h3>Cta. Ahorro 2284958475</h3>
            <form method="post" action="#">
                <div class="row uniform 50%">
                    <div class="6u 12u$(4)">
                        <input type="text" name="monto" id="monto" value="<?php echo (isset($_POST['monto']))? $_POST['monto']:""; ?>" placeholder="Monto" />
                    </div>
                    <div class="6u$ 12u$(4)">
                        <input type="text" name="plazo" id="plazo" value="<?php echo (isset($_POST['plazo']))? $_POST['plazo']:""; ?>" placeholder="Plazo" />
                    </div>
                    <div class="12u$">
                        <label for="valorAcum">Valor ahorrado</label>
                        <input type="text" name="valorAcum" id="valorAcum" readonly value="<?php echo (isset($vFuturo))? money_format('%i', $vFuturo):""; ?>" />
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