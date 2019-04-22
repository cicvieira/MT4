<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <div class="container">
        <h3>Hashes</h3><h5>4 - Comparação de Hashes</h5>
        <div class="alert alert-danger hide"></div> 
    <div class="row"> 
        <form method="post" action="criptografia.php" id="form" name="form" class="col-10">
                <div class="form-row">
                    <div class="col">
                        <textarea name="txt_hash" id="txt_hash" class="form-control" rows="5" cols="40" placeholder="Texto" required></textarea>
                    </div>
                    <div class="col">
                        <textarea name="comp_txt_hash" id="comp_txt_hash" class="form-control" rows="5" cols="40" placeholder="Hash do usuário"></textarea>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <div class="input-group">
                            <button type="button" name="btn_hash" id="btn_hash" class="btn btn-success">Gerar</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-10" style="margin-top: 5px;"> 
                <h5>Resultado</h5> 
                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Tipo de Hash</th>
                          <th scope="col">Hash</th>
                          <th scope="col">Hash Gerado</th>
                          <th scope="col">Hash do usuário</th>                       
                        </tr>
                      </thead>
                      <tbody name="hash_txt_result" id="hash_txt_result">                
                      </tbody>
                    </table> 
                </div>
            </div>

    </div>

    <?php include("footer.php"); ?>
</body>

</html>