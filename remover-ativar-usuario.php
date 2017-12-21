<?php
include_once("conexao.php");
include_once("banco_login.php");

$id_usuario = $_POST["id_usuario"];
$acao = $_POST["acao"];

if ($acao == "remover") {
  removerUsuario($conexao, $id_usuario);
  $_SESSION["success"] = "Usuário removido com sucesso!";
  header("Location: painel-adm-ativar-usuarios.php");
  die();
}if ($acao == "ativar") {
  ativarUsuario($conexao, $id_usuario);
  $_SESSION["success"] = "Usuário ativado com sucesso!";
  header("Location: painel-adm-ativar-usuarios.php");
  die();
}
