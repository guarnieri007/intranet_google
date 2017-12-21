<?php include_once("conexao.php");
include_once("banco_adm.php");
include_once("banco_login.php");

if(ehAdm()) {
  $id = $_POST['id'];

  if(removerIdioma($conexao, $id)) {
    $_SESSION["success"] = "Idioma removido com sucesso";
    header("Location: painel-adm-idiomas.php");
  }else {
    $msg = mysqli_linuxerror($conexao);
    $_SESSION['danger'] = $msg;
    header("Location: index.php");
  }

}else{
  $_SESSION['danger'] = "Erro: você não está logado como um adm, Boludo.";
  header("Location: index.php");
}
