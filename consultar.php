<?php
include_once("cabecalho.php");
include_once("bClientes.php");
include_once("class/cliente.php");
?>

<h1>Meus clientes</h1>

<table class="table1">
<tr>
<th>Nome</th>
<th>Site</th>
<th>Data</th>
<th>Hora</th>
<th>Telefone</th>
<th>Sales Rep e-mail</th>
<th>Delete</th>
</tr>

<?php
$clientes = listarMeusClientes($conexao, $_SESSION["id_usuario"]);
foreach($clientes as $cliente) :
?>
<tr>
<td><?= $cliente->getWebmaster_Nome() ?></td>
<td class="form-bnt">
 <form action="cliente.php" method="post" class="centralizando-form">
   <input name="cliente" type="hidden" value="<?= $cliente->getCliente_Id() ?>">
   <button type="submit" class="btn-link"><?=$cliente->getSite() ?></button>
 </form>
</td>

  <td><?=$cliente->getAgendamento() ?></td>
  <td><?=$cliente->getHorario_Agen() ?></td>
  <td><?=$cliente->getWebmaster_Telefone() ?></td>
  <td><?=$cliente->getSales_Rep_Email() ?></td>

  <td>
   <form action="clienteDelete.php" method="post" class="centralizando-form">
     <input name="id_cliente" type="hidden" value="<?= $cliente->getCliente_Id(); ?>">
     <button type="submit" class="btn-link">Delete</button>
   </form>
  </td>

</tr>
<?php endforeach ?>

</table>

<?php
  include_once("footer.php");
 ?>
