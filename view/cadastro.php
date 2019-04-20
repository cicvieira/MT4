<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <div class="container">
        <h3>Cadastro de novo dispositivo</h3>
    <div class="row">
        <form method="post" action="../controller/ControllerCadastro.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="hostname" name="hostname" placeholder="Nome do Hostname" required autofocus>
                <input class="form-control" type="text" id="ip" name="ip" placeholder="Endereço IP" required>
                <select id="tipo" name="tipo" class="form-control" required>
                    <option value="">Tipo do Dispositivo</option>
                    <option value="Roteador">Roteador</option>
                    <option value="Switch">Switch</option>
                    <option value="Repetidor">Repetidor</option>
                    <option value="Servidor">Servidor</option>
                </select>
                <input class="form-control" type="text" id="fabricante" name="fabricante" placeholder="Nome do Fabricante" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>