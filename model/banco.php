<?php

require_once("../init.php");
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setDispositivos($hostname,$ip,$tipo,$fabricante){
        $stmt = $this->mysqli->prepare("INSERT INTO dispositivos (`hostname`, `ip`, `tipo`, `fabricante`) VALUES (?,?,?,?)");
        $stmt->bind_param('ssss',$hostname,$ip,$tipo,$fabricante);
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getDispositivos(){
        $array = [];
        $result = $this->mysqli->query("SELECT * FROM dispositivos");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteDispositivos($id){
        if($this->mysqli->query("DELETE FROM `dispositivos` WHERE `id` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }

    public function pesquisaDispositivos($id){
        $result = $this->mysqli->query("SELECT * FROM dispositivos WHERE id='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    
    public function updateDispositivos($hostname,$ip,$tipo,$fabricante,$id){
        $stmt = $this->mysqli->prepare("UPDATE `dispositivos` SET `hostname` = ?, `ip`=?, `tipo`=?, `fabricante`=? WHERE `id` = ?");
        $stmt->bind_param('sssss',$hostname,$ip,$tipo,$fabricante,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>