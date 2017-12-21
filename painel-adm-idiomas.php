<?php  include_once("cabecalho.php");
      include_once("banco_login.php");
      include_once("banco_adm.php");
?>

<h1>Configurar idiomas</h1>
<p>Idiomas cadastrados</p>

<?php
$idiomas = buscaIdiomas($conexao);
?>
<table>
  <tr>
    <th>Delete</th><th>Idioma</th><th>Abreviação</th>
  </tr>

<?php foreach ($idiomas as $idioma): ?>
    <tr>
    <td>
      <form action="painel-adm-action-langRemove.php" method="post">
        <input name="id" type="hidden" value="<?= $idioma['id_idioma'] ?>">
        <input type="submit" value="Delete">
      </form>
    </td>
    <form action="painel-adm-action-langEdit.php" method="post">
    <input name="id_idioma" type="hidden" value="<?= $idioma['id_idioma'] ?>">
    <td><input name="idioma" type="text" value="<?= $idioma['idioma'] ?>"></td>
    <td><input name="abreviacao" type="text" value="<?= $idioma['abreviacao'] ?>"></td>
    <td><input type="submit" value="Salvar"></td>
    </form>
  </tr>

<?php endforeach; ?>

<form action="painel-adm-action-langAdd.php" method="post">
  <tr class="esconder" id="action">
    <td></td>
    <td><input name="idioma" type="text" value=""></td>
    <td><input name="abreviacao" type="text" value=""></td>
    <td><input type="submit" value="Salvar"></td>
  </tr>
</form>
<td id="add"><input type="button" value="adicionar novo"></td>
</table>



<?php
  include_once("footer.php");
 ?>
