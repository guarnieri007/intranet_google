<?php
include_once("banco_login.php");


function adicionarcliente($conexao, $webmaster_nome, $webmaster_email, $webmaster_telefone, $site, $sales_rep_email, $agendamento, $horario_agen, $mercado, $ms3) {

  $webmaster_nome = mysqli_real_escape_string($conexao, $webmaster_nome);
  $webmaster_email = mysqli_real_escape_string($conexao, $webmaster_email);
  $webmaster_telefone = mysqli_real_escape_string($conexao, $webmaster_telefone);
  $site = mysqli_real_escape_string($conexao, $site);
  $sales_rep_email = mysqli_real_escape_string($conexao, $sales_rep_email);
  $agendamento = mysqli_real_escape_string($conexao, $agendamento);
  $horario_agen = mysqli_real_escape_string($conexao, $horario_agen);

  $query = "INSERT INTO clientes (webmaster_nome, webmaster_email, webmaster_telefone, site, sales_rep_email, agendamento, horario_agen, cli_mercado, cli_ms3) values ('{$webmaster_nome}', '{$webmaster_email}', '{$webmaster_telefone}', '{$site}', '{$sales_rep_email}', '{$agendamento}', '{$horario_agen}', '{$mercado}', '{$ms3}')";
  return mysqli_query($conexao, $query);
}
