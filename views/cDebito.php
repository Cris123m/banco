<!-- Main -->
<section id="main" class="wrapper">
    <div class="container">

        <header class="major">
            <h2>Compras con tarjeta de débito</h2>
            <p>Rellene los campos solicitados</p>
        </header>

        <a href="#" class="image fit"><img src="assets/images/hand-card.png" alt="" /></a>
        <?php include_once("controllers/controllerDebito.php") ?>
        <!-- Form -->
        <section>
            <h3>Compras con tarjeta de débito - Descuento según establecimiento</h3>
            <form method="post" action="#">
                <div class="row uniform 50%">
                    <div class="col-6">
                        <input type="text" name="monto" id="monto" value="<?php echo (isset($_POST['monto']))? $_POST['monto']:""; ?>" placeholder="Monto de compra" />
                    </div>
                    <div class="6u$">
                        <div class="select-wrapper">
                            <select name="establecimiento" id="establecimiento">
                                <option value="0">- Estableciento -</option>
                                <option value="10" <?php echo (isset($_POST['establecimiento']) && $_POST['establecimiento']==10)? "selected":""; ?>>Supermaxi 10%</option>
                                <option value="15" <?php echo (isset($_POST['establecimiento']) && $_POST['establecimiento']==15)? "selected":""; ?>>KFC 15%</option>
                                <option value="20" <?php echo (isset($_POST['establecimiento']) && $_POST['establecimiento']==20)? "selected":""; ?>>Multicines 20%</option>
                                <option value="5" <?php echo (isset($_POST['establecimiento']) && $_POST['establecimiento']==5)? "selected":""; ?>>D'Prati 5%</option>
                            </select>
                        </div>
                    </div>
                    <div class="6u 12u$(4)">
                        <input type="text" name="MontoT" id="MontoT" value="<?php echo (isset($vneto))? money_format('%i', $vneto):""; ?>" readonly placeholder="Monto neto a pagar" />
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