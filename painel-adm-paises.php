<?php  include_once("cabecalho.php");
      include_once("banco_login.php");
      include_once("banco_adm.php");
?>

<h1>Configurar países</h1>
<p>Países cadastrados</p>

<?php
$paises = buscarPaises($conexao);
?>
<table>
  <tr>
    <th>Delete</th><th>País</th><th>Abreviação</th>
  </tr>

<?php foreach ($paises as $pais): ?>
    <tr>
    <td>
      <form action="painel-adm-action-pais.php" method="post">
        <input name="id_pais" type="hidden" value="<?= $pais['id_pais'] ?>">
        <input name="action" type="hidden" value="remove">
        <input type="submit" value="Delete">
      </form>
    </td>
    <form action="painel-adm-action-pais.php" method="post">
    <input name="action" type="hidden" value="edit">
    <input name="id_pais" type="hidden" value="<?= $pais['id_pais'] ?>">
    <td><input name="pais" type="text" value="<?= $pais['pais'] ?>"></td>
    <td><input name="abreviacao" type="text" value="<?= $pais['abreviacao'] ?>"></td>
    <td><input type="submit" value="Salvar"></td>
    </form>
  </tr>

<?php endforeach; ?>

<form action="painel-adm-action-pais.php" method="post">
  <tr class="esconder" id="action">
    <td></td>
    <input name="action" type="hidden" value="add">
    <td><input name="pais" type="text" value=""></td>
    <td><input name="abreviacao" type="text" value=""></td>
    <td><input type="submit" value="Salvar"></td>
  </tr>
</form>
<td id="add"><input type="button" value="adicionar novo"></td>
</table>



<?php
  include_once("footer.php");
 ?>
