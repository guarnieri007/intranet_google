<?php
include_once("conexao.php");
include_once("banco_login.php");
if(isset($_SESSION["usuario_logado"])) {
function listarClientes($conexao) {
  $clientes = array();
  $resultado = mysqli_query($conexao, 'SELECT * FROM clientes');
  while($cliente = mysqli_fetch_assoc($resultado)) {
    array_push($clientes, $cliente);
  }
  return $clientes;
}

function listarMeusClientes($conexao) {
  $clientes = array();
  $eu = $_SESSION["id_usuario"];
  $query = "SELECT * FROM clientes WHERE cli_ms3 = {$eu}";
  $resultado = mysqli_query($conexao, $query);
  while($cliente = mysqli_fetch_assoc($resultado)) {
    array_push($clientes, $cliente);
  }
  return $clientes;
}


function pesquisarCliente($conexao, $id) {
  $query = "SELECT * FROM clientes WHERE cliente_id = {$id}";
  $cliente = mysqli_query($conexao, $query);
  return mysqli_fetch_assoc($cliente);
}

}/*fim da chave que valida se o usuário está ativo e logado no sistema*/
else {
  $_SESSION["danger"] = "Faça login para ter acesso";
  header("Location: index.php");
  die();
}

function removerCliente($conexao, $id) {
  $id = mysqli_real_escape_string($conexao, $id);
  $query = "DELETE FROM clientes WHERE cliente_id = '{$id}'";
  $resultado = mysqli_query($conexao, $query);

  return $resultado;
}

function editarcliente($cliente_id, $conexao, $webmaster_nome, $webmaster_email, $webmaster_telefone, $site, $sales_rep_email, $agendamento, $horario_agen) {

  $webmaster_nome = mysqli_real_escape_string($conexao, $webmaster_nome);
  $webmaster_email = mysqli_real_escape_string($conexao, $webmaster_email);
  $webmaster_telefone = mysqli_real_escape_string($conexao, $webmaster_telefone);
  $site = mysqli_real_escape_string($conexao, $site);
  $sales_rep_email = mysqli_real_escape_string($conexao, $sales_rep_email);
  $agendamento = mysqli_real_escape_string($conexao, $agendamento);
  $horario_agen = mysqli_real_escape_string($conexao, $horario_agen);
  $query = "UPDATE clientes set webmaster_nome = '{$webmaster_nome}', webmaster_email = '{$webmaster_email}', webmaster_telefone = '{$webmaster_telefone}', site = '{$site}', sales_rep_email = '{$sales_rep_email}', agendamento = '{$agendamento}', horario_agen = '{$horario_agen}' WHERE cliente_id = {$cliente_id}";
  return mysqli_query($conexao, $query);
}
