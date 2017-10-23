<?php
include_once("conexao.php");

session_start();

function buscaUsuario($conexao, $login, $senha) {

  $login = mysqli_real_escape_string($conexao, $login);
  $senha = mysqli_real_escape_string($conexao, $senha);
  $senhaMd5 = md5($senha);
  $query = "select * from usuarios where login='{$login}' and senha='{$senhaMd5}'";
  $resultado = mysqli_query($conexao, $query);
  $usuario = mysqli_fetch_assoc($resultado);
  return $usuario;
}

function seUsuarioAtivo($conexao, $login) {
  $query = "select * from usuarios where login='{$login}' and status=1";
  $resultado = mysqli_query($conexao, $query);
  $status = mysqli_fetch_assoc($resultado);
  return $status;
}

function usuarioExiste($conexao, $login) {

  $query = "select login from usuarios where login='{$login}'";
  $resultado = mysqli_query($conexao, $query);
  $usuario = mysqli_fetch_assoc($resultado);
  return $usuario;
}

  function logandoUsuadio($login, $nome, $apelido, $mercado, $permissao, $id_usuario) {
  $_SESSION["usuario_logado"] = $login;
  $_SESSION["usuario_nome"] = $nome;
  $_SESSION["usuario_apelido"] = $apelido;
  $_SESSION["mercado"] = $mercado;
  $_SESSION["permissao"] = $permissao;
  $_SESSION["id_usuario"] = $id_usuario;
}

function temApelido() {
  if ($_SESSION["usuario_apelido"] == "sem apelido") {
    return $_SESSION["usuario_nome"];
  }
  else {
    return $_SESSION["usuario_apelido"];
  }
}

function logout() {
  session_destroy();
  session_start();
}

function quem_esta_logado() {
  return $_SESSION["usuario_logado"];
}


function criar_conta($conexao, $login, $senha, $nome, $apelido, $idioma, $pais, $permissao, $status) {

  $login = mysqli_real_escape_string($conexao, $login);
  $senha = mysqli_real_escape_string($conexao, $senha);
  $nome = mysqli_real_escape_string($conexao, $nome);
  $apelido = mysqli_real_escape_string($conexao, $apelido);
  $idioma = mysqli_real_escape_string($conexao, $idioma);
  $pais = mysqli_real_escape_string($conexao, $pais);


  $query = "INSERT INTO usuarios(login, senha, nome, apelido, idioma, pais, permissao, status) VALUES ('{$login}', '{$senha}', '{$nome}', '{$apelido}', '{$idioma}', '{$pais}', '{$permissao}', {$status})";
  return mysqli_query($conexao, $query);
}
function ehAdm() {
  $permissao = $_SESSION["permissao"];
  if ($permissao == "0") {
  return true;
}else return false;
}

function listarUsuarios($conexao) {
  $usuarios = array();
  $query = 'SELECT * FROM usuarios WHERE status="0"';
  $resultado = mysqli_query($conexao, $query);
  while($usuario = mysqli_fetch_assoc($resultado)) {
    array_push($usuarios, $usuario);
  }
  return $usuarios;
}


function ativarUsuario($conexao, $id_usuario) {
  $query = "UPDATE usuarios SET status = '1' WHERE id_usuario = '{$id_usuario}'";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;
}

function removerUsuario($conexao, $id_usuario) {
  $query = "DELETE FROM usuarios WHERE id_usuario = '{$id_usuario}'";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;
}

function mostraPais($conexao, $id_pais) {
  $query = "SELECT pais FROM idioma WHERE id_idioma='{$id_pais}'";
  $resultado1 = mysqli_query($conexao, $query);
  $resultado = mysqli_fetch_assoc($resultado1);
  return $resultado["pais"];
}
function mostraPermissao($conexao, $id_permissao) {
  $query = "SELECT nome FROM permissoes WHERE id_permissao='{$id_permissao}'";
  $resultado1 = mysqli_query($conexao, $query);
  $resultado = mysqli_fetch_assoc($resultado1);
  return $resultado["nome"];
}

function listarUsuariosFuncoes($conexao, $permissao) {
  $usuarios = [];
  $query = "SELECT * FROM usuarios WHERE permissao=$permissao AND status='1'";
  $resultado = mysqli_query($conexao, $query);
  while($usuario = mysqli_fetch_assoc($resultado)) {
    array_push($usuarios, $usuario);
  }
  return $usuarios;
}
