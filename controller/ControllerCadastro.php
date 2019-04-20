<?php
require_once("../model/cadastroDispositivos.php");
class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setHostname($_POST['hostname']);
        $this->cadastro->setIp($_POST['ip']);
        $this->cadastro->setTipo($_POST['tipo']);
        $this->cadastro->setFabricante($_POST['fabricante']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastro.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o Dispositivo não está duplicado');history.back()</script>";
        }
    }
}
new cadastroController();