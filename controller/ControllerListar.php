<?php
require_once("../model/banco.php");
class listarController{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getDispositivos();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['id'] ."</th>";
            echo "<td>".$value['hostname'] ."</td>";
            echo "<td>".$value['ip'] ."</td>";
            echo "<td>".$value['tipo'] ."</td>";
            echo "<td>".$value['fabricante'] ."</td>";
            echo "<td><a class='btn btn-warning' href='editar.php?id=".$value['id']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletar.php?id=".$value['id']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}
