<?php include_once("conexao.php");
include_once("banco_adm.php");
include_once("banco_login.php");

if(ehAdm()) {
  $id_pais = $_POST['id_pais'];
  $abreviacao = $_POST['abreviacao'];
  $pais = $_POST['pais'];
  $action = $_POST['action'];

  if ($action == "add") {
    if(adicionarPais($conexao, $pais, $abreviacao)) {
      $_SESSION["success"] = "Cadastrado com sucesso o país: $pais";
      header("Location: painel-adm-paises.php");
      die();
    }else {
      $msg = mysqli_linuxerror($conexao);
      $_SESSION['danger'] = $msg;
      header("Location: painel-adm-paises.php");
      die();
    }

  }else if ($action == "edit") {
    if (editarPais($conexao, $pais, $abreviacao, $id_pais)) {
      $_SESSION['success'] = "Edições salvas";
      header("Location: painel-adm-paises.php");
      die();
    }else {
      $msg = mysqli_linuxerror($conexao);
      $_SESSION['danger'] = $msg;
      header("Location: painel-adm-paises.php");
      die();
    }
  }else if ($action == "remove") {
    if (removerPais($conexao, $id_pais)) {
      $_SESSION['success'] = "País removido";
      header("Location: painel-adm-paises.php");
      die();
    }else {
      $msg = mysqli_linuxerror($conexao);
      $_SESSION['danger'] = $msg;
      header("Location: painel-adm-paises.php");
      die();
    }
  }
}/*fim do if é admin*/

else{
  $_SESSION['danger'] = "Erro: você não está logado como um adm, Boludo.";
  header("Location: index.php");
}
