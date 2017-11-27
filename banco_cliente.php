<?php
include_once("banco_login.php");
include_once("class/cliente.php");


function adicionarcliente($conexao, $cliente) {
  $query = "INSERT INTO clientes (webmaster_nome, webmaster_email, webmaster_telefone, site, sales_rep_email, agendamento, horario_agen, cli_mercado, cli_ms3) values ('{$cliente->getWebmaster_Nome()}', '{$cliente->getWebmaster_Email()}', '{$cliente->getWebmaster_Telefone()}', '{$cliente->getSite()}', '{$cliente->getSales_Rep_Email()}', '{$cliente->getAgendamento()}', '{$cliente->getHorario_Agen()}', '{$cliente->getMercado()}', '{$cliente->getOperador()}')";
  return mysqli_query($conexao, $query);
}
