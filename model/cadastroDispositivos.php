<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $id;
    private $hostname;
    private $ip;
    private $tipo;
    private $fabricante;

    //Metodos Set
    public function setId($string){
        $this->id = $string;
    }
    public function setHostname($string){
        $this->hostname = $string;
    }
    public function setIp($string){
        $this->ip = $string;
    }
    public function setTipo($string){
        $this->tipo = $string;
    }
    public function setFabricante($string){
        $this->fabricante = $string;
    }
 
    //Metodos Get
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

    public function incluir(){
        return $this->setDispositivos($this->getHostname(),$this->getIp(),$this->getTipo(),$this->getFabricante());
    }
}
?>