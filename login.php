<?php include_once("cabecalho.php");
include_once("banco_login.php");
include_once("banco-idiomas.php");

if (($_SESSION['usuario_logado']) == NULL) {
?>

  <div class="formularios">
  <div class="formulario">
    <h2 class="form-cadastro-h2">Faça seu login aqui.</h2>
  <form action="logar.php" method="post">
    <label for="login">Email: </label>
    <input type="email" name="login" placeholder="meuemail@meu.com" autofocus><br>
    <label for="senha">Senha: </label> <input type="password" name="senha"><br>
    <input type="submit" value="Logar">
    <p>Ainda não tem login? Clique <a href="signin.php">aqui</a> para criar sua conta.</p>
  </form>
  </div>

  <?php
    include_once("footer.php");



} else {
  header("Location: index.php");
}
 ?>
