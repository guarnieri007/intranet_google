<?php
include_once("banco_login.php");
include_once("conexao.php");

$login = $_POST["login"];
$senha = $_POST["senha"];


$usuario = buscaUsuario($conexao, $login, $senha);
if ($usuario == null) {
  $_SESSION["danger"] = "Usuário ou sua senha é inválido";
  header("Location: login.php");
}else if(seUsuarioAtivo($conexao, $login)){
  $_SESSION["success"] = "Você foi logado com sucesso, boa navegação!";
  logandoUsuadio($usuario["login"], $usuario["nome"], $usuario["apelido"], $usuario["mercado"], $usuario["permissao"], $usuario["id_usuario"]);
  header("Location: index.php");
}else {
  $_SESSION["danger"] = "Seu usuário ainda não está ativo, por favor aguarde a confirmação do administrador";
  header("Location: login.php");
}
die();
