<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">

        <header class="major">
            <h2>Simulador de préstamos</h2>
            <p>Rellene los campos solicitados</p>
        </header>

        <a href="#" class="image fit"><img src="assets/images/auto-financing.jpg" alt="" /></a>
        
        <?php include_once("controllers/controllerPrestamo.php"); ?>
        <!-- Form -->
        <section>
            <h3>Simulador</h3>
            <form method="post" action="#">
                <div class="row uniform 50%">
                    <div class="6u 12u$(4)">
                        <input type="text" name="monto" id="monto" value="<?php echo (isset($_POST['monto']))? $_POST['monto']:""; ?>" placeholder="Monto en dólares" />
                    </div>
                    <div class="6u$ 12u$(4)">
                        <input type="text" name="plazo" id="plazo" value="<?php echo (isset($_POST['plazo']))? $_POST['plazo']:""; ?>" placeholder="Plazo en meses" />
                    </div>
                    <div class="12u$">
                        <div class="select-wrapper">
                            <select name="frecuencia" id="frecuencia">
                                <option value="">- Frecuencia de plazo -</option>
                                <option value="1" <?php echo (isset($_POST['frecuencia']) && $_POST['frecuencia']==1)? "selected":""; ?>>Mensual</option>
                                <option value="2" <?php echo (isset($_POST['frecuencia']) && $_POST['frecuencia']==2)? "selected":""; ?>>Bimensual</option>
                                <option value="3" <?php echo (isset($_POST['frecuencia']) && $_POST['frecuencia']==3)? "selected":""; ?>>Trimestral</option>
                                <option value="4" <?php echo (isset($_POST['frecuencia']) && $_POST['frecuencia']==4)? "selected":""; ?>>Semestral</option>
                                <option value="5" <?php echo (isset($_POST['frecuencia']) && $_POST['frecuencia']==5)? "selected":""; ?>>Anual</option>
                                <option value="6" <?php echo (isset($_POST['frecuencia']) && $_POST['frecuencia']==6)? "selected":""; ?>>Al vencimiento</option>
                            </select>
                        </div>
                    </div>
                    <div class="6u$ 12u$(4)">
                        <label for="valorMes">Valor a pagar por cuota</label>
                        <input type="text" name="valorMes" id="valorMes" readonly value="<?php echo (isset($vCuota))? money_format('%i', $vCuota):""; ?>"  />
                    </div>
                    <div class="6u$ 12u$(4)">
                        <label for="valorMes">Valor a pagar en total</label>
                        <input type="text" name="valorTotal" id="valorTotal" readonly value="<?php echo (isset($vtotal))? money_format('%i', $vtotal):""; ?>"  />
                    </div>
                    
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