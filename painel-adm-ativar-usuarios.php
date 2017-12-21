<?php  include_once("cabecalho.php");
      include_once("banco_login.php");
if (ehAdm()) {
?>

<div>
<h2>Usuários aguardando ativação</h2>
<table class="table1">
<tr><th>Nome</th><th>E-mail</th><th>Status</th><th>País</th><th>Permissão</th><th>Aprovar</th><th>Reprovar</th></tr>

  <?php
  $usuarios = listarUsuarios($conexao);
  foreach($usuarios as $usuario) :
  ?>
  <tr>
  <td><?= $usuario['nome'] ?></td>
  <td><?= $usuario['login'] ?> </td>
  <td><?php if ($usuario['status']) {echo "Ativo";}else {echo "Inativo";} ?> </td>
  <td><?php echo mostraPais($conexao, $usuario['pais']); ?></td>
  <td><?php echo mostraPermissao($conexao, $usuario['permissao']); ?></td>
<td>  <form action="remover-ativar-usuario.php" method="post">
    <input name="id_usuario" type="hidden" value="<?= $usuario['id_usuario']; ?>">
    <input name="acao" type="hidden" value="ativar">
    <button type="submit" class="btn-link">Ativar</button>
  </form>
</td>

<td>
  <form action="remover-ativar-usuario.php" method="post">
    <input name="id_usuario" type="hidden" value="<?= $usuario['id_usuario']; ?>">
    <input name="acao" type="hidden" value="remover">
    <button type="submit" class="btn-link">Remover</button>
  </form>
</td>
  </tr>
  <?php endforeach ?>

</table>

</div>
<?php
  include_once("footer.php");
}else{
  $_SESSION['danger'] = "Erro: você não está logado como um adm, Boludo.";
  header("Location: index.php");
}  
 ?>
