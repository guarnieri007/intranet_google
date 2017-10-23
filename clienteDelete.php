<?php  include_once("cabecalho.php");
      include_once("bClientes.php");
$id = $_POST['id_cliente'];

if (removerCliente($conexao, $id)) {
  $_SESSION['success'] = "Cliente removido com sucesso";
  header("Location: consultar.php");
}else{
  $_SESSION['danger'] = "Sos Boludo, e teve erro tente outra vez";
  header("Location: consultar.php");
}
