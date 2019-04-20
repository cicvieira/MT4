<?php require_once("../controller/ControllerListar.php");?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include("head.php"); ?>

<body>
    <?php include("menu.php"); ?>
    <div class="container">
    <h3>Listagem de Dispositivos cadastrados</h3>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Hostname</th>
                <th>Endereço IP</th>
                <th>Tipo</th>
                <th>Fabricante</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php new listarController();  ?>
        </tbody>
    </table>
    </div>

    <?php include("footer.php"); ?>

</body>
</html>