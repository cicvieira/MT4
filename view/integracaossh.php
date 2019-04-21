<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <?php require_once("../controller/ControllerIntegracaossh.php");?>

    <div class="container">
        <h3>Integração SSH</h3>
    <div class="row">       
        <form method="post" action="integracaossh.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="usuario" name="usuario" value="" 
                placeholder="Nome do Usuário SSH" required autofocus>
                <input class="form-control" type="password" id="senha" name="senha" value=""
                placeholder="Senha SSH" required>
                <select id="dispositivoId" name="dispositivoId" class="form-control">
                <option value="">Selecione o dispositivo</option>
                <?php foreach ($listaDispositivos as $dispositivo){
                    echo $dispositivo;
                }?>
                </select>
                <input class="form-control" type="text" id="comando" name="comando" value="" 
                placeholder="Comando" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="editar" name="submit" value="Enviar">Enviar</button>
            </div>
            <div class="form-group">
                <?php echo $resultComando; ?>
            </div>
        </form>
    </div>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>