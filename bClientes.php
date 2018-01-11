<?php
include_once("conexao.php");
include_once("banco_login.php");
include_once("class/cliente.php");
if(isset($_SESSION["usuario_logado"])) {
function listarClientes($conexao) {
  $clientes = array();
  $resultado = mysqli_query($conexao, 'SELECT * FROM clientes');
  while($cliente = mysqli_fetch_assoc($resultado)) {
    array_push($clientes, $cliente);
  }
  return $clientes;
}

function listarMeusClientes($conexao, $me, $inicial, $final) {
  $clientes = array();
  $eu = $me;
  $inicial = $inicial;
  $final = $final;
  if ($inicial !== NULL AND $final !== NULL) {
    $query = "SELECT * FROM clientes WHERE cli_ms3 = {$eu} AND agendamento Between '{$inicial}' AND '{$final}'";
  }else {
    $query = "SELECT * FROM clientes WHERE cli_ms3 = {$eu}";
  }

  $resultado = mysqli_query($conexao, $query);
  while($cliente = mysqli_fetch_assoc($resultado)) {

    $webmaster_nome = $cliente['webmaster_nome'];
    $webmaster_email = $cliente['webmaster_email'];
    $webmaster_telefone = $cliente['webmaster_telefone'];
    $site = $cliente['site'];
    $sales_rep_email = $cliente['sales_rep_email'];
    $agendamento = $cliente['agendamento'];
    $horario_agen = $cliente['horario_agen'];
    $mercado = $cliente['mercado'];
    $operador = $cliente['ms3'];
    $cliente_id = $cliente['cliente_id'];
    $cliente = new Cliente($webmaster_nome, $webmaster_email, $webmaster_telefone, $site, $agendamento, $horario_agen, $mercado, $operador);
    $cliente->setCliente_Id($cliente_id);
    $cliente->setSales_Rep_email($sales_rep_email);

    array_push($clientes, $cliente);
  }
  return $clientes;
}


function pesquisarCliente($conexao, $id) {
  $query = "SELECT * FROM clientes WHERE cliente_id = {$id}";
  $cliente = mysqli_query($conexao, $query);
  return mysqli_fetch_assoc($cliente);
}

function removerCliente($conexao, $id) {
  $id = mysqli_real_escape_string($conexao, $id);
  $query = "DELETE FROM clientes WHERE cliente_id = '{$id}'";
  $resultado = mysqli_query($conexao, $query);

  return $resultado;
}

function editarcliente($conexao, $cliente) {

  $cliente->setWebmaster_Nome(mysqli_real_escape_string($conexao, $cliente->getWebmaster_Nome()));
  $cliente->setWebmaster_Email(mysqli_real_escape_string($conexao, $cliente->getWebmaster_Email()));
  $cliente->setWebmaster_Telefone(mysqli_real_escape_string($conexao, $cliente->getWebmaster_Telefone()));
  $cliente->setSite(mysqli_real_escape_string($conexao, $cliente->getSite()));
  $cliente->setSales_Rep_Email(mysqli_real_escape_string($conexao, $cliente->getSales_Rep_Email()));
  $cliente->setAgendamento(mysqli_real_escape_string($conexao, $cliente->getAgendamento()));
  $cliente->setHorario_Agen(mysqli_real_escape_string($conexao, $cliente->getHorario_Agen()));
  $query = "UPDATE clientes set webmaster_nome = '{$cliente->getWebmaster_Nome()}', webmaster_email = '{$cliente->getWebmaster_Email()}', webmaster_telefone = '{$cliente->getWebmaster_Telefone()}', site = '{$cliente->getSite()}', sales_rep_email = '{$cliente->getSales_Rep_Email()}', agendamento = '{$cliente->getAgendamento()}', horario_agen = '{$cliente->getHorario_Agen()}' WHERE cliente_id = {$cliente->getCliente_Id()}";
  return mysqli_query($conexao, $query);

}

}/*fim da chave que valida se o usuário está ativo e logado no sistema*/
else {
  $_SESSION["danger"] = "Faça login para ter acesso";
  header("Location: index.php");
  die();
}
