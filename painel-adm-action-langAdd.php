<?php include_once("conexao.php");
include_once("banco_adm.php");
include_once("banco_login.php");

if(ehAdm()) {
  $idioma = $_POST['idioma'];
  $abreviacao = $_POST['abreviacao'];
  $pais = $_POST['pais'];

  if(adicionarIdiomas($conexao, $idioma, $abreviacao)) {
    $_SESSION["success"] = "Adicionado com sucesso<br>idioma: $idioma ; abreviacao: $abreviacao";
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
