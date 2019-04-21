<?php
require_once('../controller/ControllerCifra.php');

if(isset($_POST['cifrar'])){
	$string = $_POST['string'];
	$chave = $_POST['chave'];

	$class = new CifraCesar();
	$criptografia = $class->criptografa($string, $chave);
	// $criptografia = ['string' => $criptografia];
	header('Content-Type: application/json; charset=utf-8');
	echo json_encode($criptografia);
}

if(isset($_POST['decifrar'])){
	$string = $_POST['string'];
	$chave = $_POST['chave'];

	$class = new CifraCesar();
	$decriptografa = $class->decriptografa($string, $chave);

	header('Content-Type: application/json; charset=utf-8');
	echo json_encode($decriptografa);
}
?>
