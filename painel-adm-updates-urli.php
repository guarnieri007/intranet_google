<?php include_once("cabecalho.php");
      include_once("banco_login.php");
      include_once("conexao.php");
      include_once("banco_adm.php");
if (ehAdm()) {
$query = $_POST['query'];

if(updateDatabase($conexao, $query)) {
  $_SESSION['success'] = 'Dados atualizados com sucesso!';
  header("Location: painel-adm-updates.php");
}
else{
  $msg = mysqli_linuxerror($conexao);
  $_SESSION['danger'] = $msg;
}/* Fim do if para validar se é adm */


}

else {
  $_SESSION["danger"] = "Você não é adm e não tem permissão para acessar essa página";
  header("Location: index.php");
}

 ?>
