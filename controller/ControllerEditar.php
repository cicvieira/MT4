<?php
require_once("../model/banco.php");

class editarController {

    private $editar;
    private $id;
    private $hostname;
    private $ip;
    private $tipo;
    private $fabricante;

    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaDispositivos($id);
        $this->id          =$row['id'];
        $this->hostname    =$row['hostname'];
        $this->ip          =$row['ip'];
        $this->tipo        =$row['tipo'];
        $this->fabricante  =$row['fabricante'];

    }
    public function editarFormulario($hostname,$ip,$tipo,$fabricante,$id){
        if($this->editar->updateDispositivos($hostname,$ip,$tipo,$fabricante,$id) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getId(){
        return $this->id;
    }
    public function getHostname(){
        return $this->hostname;
    }
    public function getIp(){
        return $this->ip;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getFabricante(){
        return $this->fabricante;
    }


}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarController($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['hostname'],$_POST['ip'],$_POST['tipo'],$_POST['fabricante'],$_POST['id']);
}
?>