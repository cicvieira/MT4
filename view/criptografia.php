<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <div class="container">
        <h3>Criptografia</h3><h5>1. Cifra de César</h5>
    <div class="row">     
        <form method="post" action="criptografia.php" id="form" name="form" class="col-10">
                <div class="form-row">
                    <div class="col">
                        <textarea name="txt_encript" id="txt_encript" class="form-control" rows="5" cols="40" placeholder="Insira aqui o texto que deseja criptografar"></textarea>
                    </div>
                    <div class="col">
                        <textarea name="txt_decript" id="txt_decript" class="form-control" rows="5" cols="40" placeholder="Insira aqui o texto que deseja descriptografar"></textarea>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <div class="input-group">
                            <input type="number" class="form-control" id="txt_key_encript" placeholder="Insira aqui sua chave">
                            <div class="input-group-addon">
                                <button type="button" name="btn_encript" id="btn_encript" class="btn btn-success">Criptografar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <input type="number" class="form-control" id="txt_key_decript" placeholder="Insira aqui sua chave">
                            <div class="input-group-addon">
                                <button type="button" name="btn_decript" id="btn_decript" class="btn btn-success">Descriptografar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-10" style="margin-top: 5px;">  
            <h5>Resultado</h5>
                <textarea name="txt_result" id="txt_result" class="form-control" rows="5" cols="40" placeholder="Resultado gerado pela codificação/decodificação" disabled></textarea>
            </div>
            <hr>
    </div>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>