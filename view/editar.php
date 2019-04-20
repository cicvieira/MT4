<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <?php require_once("../controller/ControllerEditar.php");?>
    <div class="container">
        <h3>Alteração de dispositivo cadastrado</h3>
    <div class="row">       
        <form method="post" action="../controller/ControllerEditar.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="hostname" name="hostname" value="<?php echo $editar->getHostname(); ?>" required autofocus>
                <input class="form-control" type="text" id="ip" name="ip" value="<?php echo $editar->getIp(); ?>" required>
                <select id="tipo" name="tipo" class="form-control" required>
                    <option value="<?php echo $editar->getTipo();?>"><?php echo $editar->getTipo();?></option>
                    <option value="Roteador">Roteador</option>
                    <option value="Switch">Switch</option>
                    <option value="Repetidor">Repetidor</option>
                    <option value="Servidor">Servidor</option>
                </select>
                <input class="form-control" type="text" id="fabricante" name="fabricante" value="<?php echo $editar->getFabricante(); ?>" required>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $editar->getId();?>">
                <button type="submit" class="btn btn-success" id="editar" name="submit" value="Editar">Editar</button>
            </div>
        </form>
    </div>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>