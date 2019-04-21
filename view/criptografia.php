<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <div class="container">
        <h3>Criptografia</h3><h5>1. Cifra de César</h5>
    <div class="row">     
        <form method="post" action="criptografia.php" id="form1" name="form1" class="col-10">
                <div class="form-row">
                    <div class="col">
                        <textarea name="txt_encript1" id="txt_encript1" class="form-control" rows="5" cols="40" placeholder="Insira aqui o texto que deseja criptografar"></textarea>
                    </div>
                    <div class="col">
                        <textarea name="txt_decript1" id="txt_decript1" class="form-control" rows="5" cols="40" placeholder="Insira aqui o texto que deseja descriptografar"></textarea>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <div class="input-group">
                            <input type="number" class="form-control" id="txt_key_encript1" placeholder="Insira aqui sua chave">
                            <div class="input-group-addon">
                                <button type="button" name="btn_encript1" id="btn_encript1" class="btn btn-success">Criptografar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <input type="number" class="form-control" id="txt_key_decript1" placeholder="Insira aqui sua chave">
                            <div class="input-group-addon">
                                <button type="button" name="btn_decript1" id="btn_decript1" class="btn btn-success">Descriptografar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-10" style="margin-top: 5px;">  
            <h5>Resultado</h5>
                <textarea name="txt_result1" id="txt_result1" class="form-control" rows="5" cols="40" placeholder="Resultado gerado pela codificação/decodificação" disabled></textarea>
            </div>
    </div>
    </div>

    <div class="container">
        <hr>
        <h5>2. AES256 com SALT</h5>
    <div class="row">     
        <form method="post" action="criptografia.php" id="form2" name="form2" class="col-10">
                <div class="form-row">
                    <div class="col">
                        <textarea name="txt_encript2" id="txt_encript2" class="form-control" rows="5" cols="40" placeholder="Insira aqui o texto que deseja criptografar"></textarea>
                    </div>
                    <div class="col">
                        <textarea name="txt_decript2" id="txt_decript2" class="form-control" rows="5" cols="40" placeholder="Insira aqui o texto que deseja descriptografar"></textarea>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <div class="input-group">
                            <input type="number" class="form-control" id="txt_key_encript2" placeholder="Insira aqui sua chave">
                            <div class="input-group-addon">
                                <button type="button" name="btn_encript2" id="btn_encript2" class="btn btn-success">Criptografar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <input type="number" class="form-control" id="txt_key_decript2" placeholder="Insira aqui sua chave">
                            <div class="input-group-addon">
                                <button type="button" name="btn_decript2" id="btn_decript2" class="btn btn-success">Descriptografar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-10" style="margin-top: 5px;">  
            <h5>Resultado</h5>
                <textarea name="txt_result2" id="txt_result2" class="form-control" rows="5" cols="40" placeholder="Resultado gerado pela codificação/decodificação" disabled></textarea>
            </div>
    </div>
    </div>

     <div class="container">
        <hr>
        <h5>3. Mcrypt</h5>
    <div class="row">     
        <form method="post" action="criptografia.php" id="form3" name="form3" class="col-10">
                <div class="form-row">
                    <div class="col">
                        <textarea name="txt_encript3" id="txt_encript3" class="form-control" rows="5" cols="40" placeholder="Insira aqui o texto que deseja criptografar"></textarea>
                    </div>
                    <div class="col">
                        <textarea name="txt_decript3" id="txt_decript3" class="form-control" rows="5" cols="40" placeholder="Insira aqui o texto que deseja descriptografar"></textarea>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <div class="input-group">
                            <input type="number" class="form-control" id="txt_key_encript3" placeholder="Insira aqui sua chave">
                            <div class="input-group-addon">
                                <button type="button" name="btn_encript3" id="btn_encript3" class="btn btn-success">Criptografar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <input type="number" class="form-control" id="txt_key_decript3" placeholder="Insira aqui sua chave">
                            <div class="input-group-addon">
                                <button type="button" name="btn_decript3" id="btn_decript3" class="btn btn-success">Descriptografar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-10" style="margin-top: 5px;">  
            <h5>Resultado</h5>
                <textarea name="txt_result3" id="txt_result3" class="form-control" rows="5" cols="40" placeholder="Resultado gerado pela codificação/decodificação" disabled></textarea>
            </div>
    </div>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>