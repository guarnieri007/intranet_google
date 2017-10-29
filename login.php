<?php include_once("cabecalho.php");
include_once("banco_login.php");
include_once("banco-idiomas.php");
include_once("banco_adm.php");

$idiomas = listaIdiomas($conexao);
$paises = buscarPaises($conexao);

if (($_SESSION['usuario_logado']) == NULL) {
?>

  <h1>Crie seu login ou acesse sua conta</h1>

  <div class="formularios">
  <div class="formulario">
    <h2 class="form-cadastro-h2">Faça seu login aqui.</h2>
  <form action="logar.php" method="post">
    <label for="login">Email: </label>
    <input type="email" name="login" placeholder="teste@teste.com"><br>
    <label for="senha">Senha: </label> <input type="password" name="senha"><br>
    <input type="submit" value="logar" class="botao">
  </form>
  </div>

  <div class="form-cadastro">
    <h2 class="form-cadastro-h2">Crie seu cadastro</h2>
  <form action="criando-conta.php" method="post">
    <label for="nome">Nome: </label>
    <input type="text" name="nome" placeholder="digite seu nome"><br>

    <label for="login">Email: </label>
    <input type="email" name="login" placeholder="teste@teste.com"><br>

    <label for="senha">Senha: </label>
    <input type="password" name="senha"><br>

    <p>Se você prefere ser chamado por outro nome ou por um apelido, digite abaixo.</p>
    <label for="apelido">Apelido: </label>
    <input type="text" name="apelido" placeholder="digite seu apelido"><br>
  <br>
  <label>Idioma: </label>
  <select name="idioma">
    <?php foreach ($idiomas as $idioma): ?>
    <option value="<?= $idioma['id_idioma']; ?>"> <?= $idioma['idioma']; ?></option>
    <?php endforeach; ?>
  </select>


  <label>Onde estou </label>
  <select name="pais">
    <?php foreach ($paises as $pais): ?>
    <option value="<?= $pais['id_pais'] ?>"> <?= $pais['pais'] ?></option>
    <?php endforeach; ?>
  </select>

  <br><br><br>
  <input type="submit" value="Cadastrar" class="botao">


  </form>
  </div>
  </div>

  <?php
    include_once("footer.php");



} else {
  header("Location: index.php");
}
 ?>
