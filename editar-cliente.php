<?php
include_once("conexao.php");
include_once("bClientes.php");
include_once("class/cliente.php");

$webmaster_nome = $_POST["webmaster_nome"];
$webmaster_email = $_POST["webmaster_email"];
$webmaster_telefone = $_POST["webmaster_telefone"];
$site = $_POST["site"];
$sales_rep_email = $_POST["sales_rep_email"];
$agendamento = $_POST["agendamento"];
$horario_agen = $_POST["horario_agen"];
$cliente_id = $_POST["id_cliente"];
$operador = $_POST["operador"];
$mercado = $_POST["mercado"];

$cliente = new cliente($webmaster_nome, $webmaster_email, $webmaster_telefone, $site, $agendamento, $horario_agen, $mercado, $operador);
$cliente->setSales_Rep_Email($sales_rep_email);
$cliente->setCliente_Id($cliente_id);

if(editarcliente($conexao, $cliente)) {
  $_SESSION['success'] = 'Dados atualizados com sucesso!';
  header("Location: consultar.php");
}
else {
  $msg = mysqli_linuxerror($conexao);
  $_SESSION['danger'] = $msg;
}
