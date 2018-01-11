<?php include_once("cabecalho.php");
      include_once("banco_login.php");
      include_once("conexao.php");
      include_once("banco_adm.php");
if (ehAdm()) {

  $update1 = "ALTER TABLE clientes ADD status varchar(255) AFTER site, ADD criado_em varchar(255) AFTER status, ADD last_modificado varchar(255) NOT NULL AFTER criado_em, ADD historico varchar(255) AFTER criado_em;";
  $downgrade1 = 'ALTER TABLE clientes DROP COLUMN status, DROP COLUMN criado_em, DROP COLUMN last_modificado, DROP COLUMN historico;';

?>

<h1>Atualizações disponíveis</h1>

<p>Clique na opção de atualização</p>

<form action="painel-adm-updates-urli.php" method="post">
<input type="hidden" value="<?php echo $update1 ?>" name="query">
<button type="submit">update 1</button>
</form>

<form action="painel-adm-updates-urli.php" method="post">
<input type="hidden" value="<?php echo $downgrade1 ?>" name="query">
<button type="submit">downgrade 1</button>
</form>

<?php
  include_once("footer.php");
}
else {
  $_SESSION["danger"] = "Você não é adm e não tem permissão para acessar essa página";
  header("Location: index.php");
}

 ?>
