<?php
require 'classes/conexao.classe.php';

$activation_key = $_GET['ak'];

$conexao = new Conexao();
$qr = $conexao->Query("select id from users where activation_key = '".$activation_key."'");

$data = mysql_fetch_array($qr);
$user_id = $data['id'];

$qr = $conexao->Query("update users set status = 1, activation_key = '' where id = ".$user_id);

echo "<h3>Conta ativada</h3><hr>Voc&ecirc esta pronto para acessar sua conta, estamos lhe redirecionando para a pagina inicial...";
sleep(1);
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";

?>
