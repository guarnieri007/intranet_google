<?php
include_once("conexao.php");
include_once("banco_cliente.php");
include_once("class/cliente.php");
$webmaster_nome = $_POST["webmaster_nome"];
$webmaster_email = $_POST["webmaster_email"];
$webmaster_telefone = $_POST["webmaster_telefone"];
$site = $_POST["site"];
$sales_rep_email = $_POST["sales_rep_email"];
$agendamento = $_POST["agendamento"];
$horario_agen = $_POST["horario_agen"];
$mercado = $_POST["mercado"];
$operador = $_POST["ms3"];

$webmaster_nome = mysqli_real_escape_string($conexao, $webmaster_nome);
$webmaster_email = mysqli_real_escape_string($conexao, $webmaster_email);
$webmaster_telefone = mysqli_real_escape_string($conexao, $webmaster_telefone);
$site = mysqli_real_escape_string($conexao, $site);
$sales_rep_email = mysqli_real_escape_string($conexao, $sales_rep_email);
$agendamento = mysqli_real_escape_string($conexao, $agendamento);
$horario_agen = mysqli_real_escape_string($conexao, $horario_agen);

$cliente = new Cliente($webmaster_nome, $webmaster_email, $webmaster_telefone, $site, $agendamento, $horario_agen, $mercado, $operador);
$cliente->setSales_Rep_Email($sales_rep_email);

if(adicionarcliente($conexao, $cliente)) {
  $_SESSION['success'] = 'Site: '.$cliente->getSite().' adicionado com sucesso!';
  header("Location: cadastrar.php");
}
else {
  $msg = mysqli_linuxerror($conexao);
  $_SESSION['danger'] = $msg;
}
