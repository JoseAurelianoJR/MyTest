<?php
session_start();
require 'classes/conexao.classe.php';

$conexao = new Conexao();

$email = $_POST['email'];
$password = $_POST['password'];

$email = mysql_real_escape_string( $email );
$password = mysql_real_escape_string( md5($password) );

$result = $conexao->NumRegSql("SELECT * FROM users WHERE email = '$email' and password = '$password'");

if($result == 1)
{
	$user_data = $conexao->Query("SELECT * FROM users WHERE email = '$email' and password = '$password'");
	$_SESSION['id'] = mysql_result( $user_data, 0, 'id' );
	$_SESSION['complete_name'] = mysql_result( $user_data, 0, 'complete_name' );
	$_SESSION['username'] = mysql_result( $user_data, 0, 'username' );;
	$_SESSION['email'] = $email;
	header("location: profile.php");

}
else
{

	header("location: loginFailed.php");				

}
?>