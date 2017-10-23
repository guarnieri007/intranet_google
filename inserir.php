<?php
include_once("conexao.php");
include_once("banco_cliente.php");
$webmaster_nome = $_POST["webmaster_nome"];
$webmaster_email = $_POST["webmaster_email"];
$webmaster_telefone = $_POST["webmaster_telefone"];
$site = $_POST["site"];
$sales_rep_email = $_POST["sales_rep_email"];
$agendamento = $_POST["agendamento"];
$horario_agen = $_POST["horario_agen"];
$mercado = $_POST["mercado"];
$ms3 = $_POST["ms3"];



if(adicionarcliente($conexao, $webmaster_nome, $webmaster_email, $webmaster_telefone, $site, $sales_rep_email, $agendamento, $horario_agen, $mercado, $ms3)) {
  $_SESSION['success'] = '$site adicionado com sucesso!';
  header("Location: cadastrar.php");
}
else {
  $msg = mysqli_linuxerror($conexao);
  $_SESSION['danger'] = $msg;
}
