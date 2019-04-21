<?php
require_once("../model/banco.php");

class integracaoController {

    private $editar;
    private $id;
    private $hostname;

    public function __construct(){
        $this->editar = new Banco();
        $this->listaDispositivos();
    }

    public function listaDispositivos(){
        return $this->editar->listaDispositivos();
    }

    public function enviarComando($usuario,$senha,$dispositivoId,$comando){

        $resp = "Falha: falha na autenticação";

        if($usuario==''){
            return $resp.'{Usuario}';
        }
        if($senha==''){
            return $resp .'{Senha}';;
        }
        if($dispositivoId==''){
            return $resp .'{Ip Or Hostname}';;
        }
        if($comando==''){
            return $resp .'{Comando}';;
        }

        $row = $this->editar->pesquisaDispositivos($dispositivoId);

        if (!function_exists("ssh2_connect")) die("função ssh2_connect não existe");

        if(!($con = ssh2_connect($row['ip'], 22))){
            $resp = "Falha: falha ao estabelecer conexão\n";
        } else {
        
            if(@!ssh2_auth_password($con, $usuario, $senha)) {
                $resp = "Falha: falha na autenticação\n";
            } else {
                $resp = "Comando (".$comando.") Sucesso...\n";

                if (!($stream = ssh2_exec($con, $comando ))) {
                    $resp = "falhar: falha ao executar o comando\n";
                } else {

                    stream_set_blocking($stream, true);                   
                    while ($buf = fread($stream,4096)) {
                        $resp .= $buf;
                    }
                    fclose($stream);
                }
            }
        }

        return $resp;
    }
}

$integracao = new integracaoController();
$listaDispositivos = $integracao->listaDispositivos();

$resultComando ='';

if(isset($_POST['submit'])){
   $resultComando = $integracao->enviarComando($_POST['usuario'],$_POST['senha'],$_POST['dispositivoId'],$_POST['comando']);
}

?>