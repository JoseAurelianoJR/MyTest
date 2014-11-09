<?php
require 'classes/conexao.classe.php';

$value = $_GET['value'];
$type = $_GET['type'];

switch($type){
	case 'username':
		verifyUsername($value);
		break;
	case 'email':
		verifyEmail($value);
		break;
	default:
		echo 'not found option';
		break;
}


function verifyUsername($username){
	$conexao = new Conexao();
	$qr = $conexao->Query("select id from users where username = '".$username."'");
	$data = mysql_fetch_array( $qr );

	echo $data == null ? "OK" : "FAIL";
}

function verifyEmail($email){
	$conexao = new Conexao();
	$qr = $conexao->Query("select id from users where email = '".$email."'");
	$data = mysql_fetch_array( $qr );

	echo $data == null ? "OK" : "FAIL";
}

