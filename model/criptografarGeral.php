<?php
require_once('../controller/ControllerCriptografia.php');

$class = new Criptografia();

if(isset($_POST['encryptCifrar'])){
	$string = $_POST['string'];
	$chave = $_POST['chave'];

	$criptografia = $class->criptografa($string, $chave);

	header('Content-Type: application/json; charset=utf-8');
	echo json_encode($criptografia);
}

if(isset($_POST['decryptCifrar'])){
	$string = $_POST['string'];
	$chave = $_POST['chave'];

	$decriptografa = $class->decriptografa($string, $chave);

	header('Content-Type: application/json; charset=utf-8');
	echo json_encode($decriptografa);
}


if(isset($_POST['encryptAes'])){
	$string = $_POST['string'];
	$chave = $_POST['chave'];

	$criptografia = $class->criptografaAes($string, $chave);

	header('Content-Type: application/json; charset=utf-8');
	echo json_encode($criptografia);
}

if(isset($_POST['decryptAes'])){
	$string = $_POST['string'];
	$chave = $_POST['chave'];

	$decriptografa = $class->decriptografaAes($string, $chave);

	header('Content-Type: application/json; charset=utf-8');
	echo json_encode($decriptografa);
}


if(isset($_POST['encryptMcrypt'])){
	$string = $_POST['string'];
	$chave = $_POST['chave'];

	$criptografia = $class->criptografaMcrypt($string, $chave);
	
	header('Content-Type: application/json; charset=utf-8');
	echo json_encode($criptografia);
}

if(isset($_POST['decryptMcrypt'])){
	$string = $_POST['string'];
	$chave = $_POST['chave'];

	$decriptografa = $class->decriptografaMcrypt($string, $chave);

	header('Content-Type: application/json; charset=utf-8');
	echo json_encode($decriptografa);
}

?>
