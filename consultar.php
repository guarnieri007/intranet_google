<?php  include_once("cabecalho.php");
include_once("bClientes.php");
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
$clientes = listarMeusClientes($conexao);
foreach($clientes as $cliente) :
?>
<tr>
<td><?= $cliente['webmaster_nome'] ?></td>
<td class="form-bnt">
 <form action="cliente.php" method="post" class="centralizando-form">
   <input name="cliente" type="hidden" value="<?= $cliente['cliente_id']; ?>">
   <button type="submit" class="btn-link"><?=$cliente['site'] ?></button>
 </form>
</td>

  <td class="data-cliente"><?=$cliente['agendamento'] ?></td>
  <td class="hora-cliente"><?=$cliente['horario_agen'] ?></td>
  <td><?=$cliente['webmaster_telefone'] ?></td>
  <td><?=$cliente['sales_rep_email'] ?></td>

  <td>
   <form action="clienteDelete.php" method="post" class="centralizando-form">
     <input name="id_cliente" type="hidden" value="<?= $cliente['cliente_id']; ?>">
     <button type="submit" class="btn-link">Delete</button>
   </form>
  </td>

</tr>
<?php endforeach ?>

</table>

<?php
  include_once("footer.php");
 ?>
