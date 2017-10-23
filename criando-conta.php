<?php
include_once("conexao.php");
include_once("banco_login.php");
include_once("cabecalho.php");

  $login = mysqli_real_escape_string($conexao, $_POST["login"]);
  $senha = mysqli_real_escape_string($conexao, $_POST["senha"]);
  $nome = mysqli_real_escape_string($conexao, $_POST["nome"]);
  $apelido = mysqli_real_escape_string($conexao, $_POST["apelido"]);
  $idioma = mysqli_real_escape_string($conexao, $_POST["idioma"]);
  $pais = mysqli_real_escape_string($conexao, $_POST["pais"]);
  $status = 0;
  $permissao = '1';
if ($apelido == null) {
  $apelido = 'sem apelido';
}
$senhaMd5 = md5($senha);

$temCadastro = usuarioExiste($conexao, $login);

if ($temCadastro) {
  $_SESSION["danger"] = 'E-mail já cadastrado em nosso sistema, por favor faça o login.<br>Se esqueceu a senha clique em "esqueci a senha"';
  header("Location: login.php");
}else{
  criar_conta($conexao, $login, $senhaMd5, $nome, $apelido, $idioma, $pais, $permissao, $status); ?>
    <p>Parabéns <?= $nome ?>, o seu login foi criado com sucesso!<br>Ainda não é possível acessar a conta <?= $login ?> pois o Administrador precisa ativar seu usuário, aguarde e tente mais tarde.</p>
<?php
}

include_once("footer.php");
?>
