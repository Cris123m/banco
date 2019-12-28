<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">

        <header class="major">
            <h2>Simulador de préstamos hipotecarios</h2>
            <p>Rellene los campos solicitados</p>
        </header>

        <a href="#" class="image fit"><img src="assets/images/money-house.jpg" alt="" /></a>
        <?php include_once("controllers/controllerPrestamoHip.php") ?>
        <!-- Form -->
        <section>
            <h3>Cálculo de préstamo hipotecario</h3>
            <form method="post" action="#">
                <div class="row uniform 50%">
                    <div class="6u 12u$(4)">
                        <input type="text" name="monto" id="monto" value="<?php echo (isset($_POST['monto']))? $_POST['monto']:""; ?>" placeholder="Monto" />
                    </div>
                    
                    <div class="6u 12u$(4)">
                        <input type="text" name="plazo" id="plazo" value="<?php echo (isset($_POST['plazo']))? $_POST['plazo']:""; ?>" placeholder="Plazo" />
                    </div>
                    <div class="6u 12u$(4)">
                        <label for="vMes">Valor a pagar por mes</label>
                        <input type="text" name="vMes" id="vMes" value="<?php echo (isset($vMes))? money_format('%i', $vMes):""; ?>" placeholder="" />
                    </div>
                    <div class="6u 12u$(4)">
                        <label for="interes">Interés a pagar - 30%</label>
                        <input type="text" name="interes" id="interes" value="<?php echo (isset($d))? money_format('%i', $d):""; ?>" readonly placeholder="" />
                    </div>
                    <div class="6u 12u$(4)">
                        <label for="vNeto">Valor Neto a recibir</label>
                        <input type="text" name="vNeto" id="vNeto" value="<?php echo (isset($vNeto))? money_format('%i', $vNeto):""; ?>" readonly placeholder="" />
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