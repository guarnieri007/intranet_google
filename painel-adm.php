<?php  include_once("cabecalho.php");
      include_once("banco_login.php");

if (ehAdm()) {
?>

<h1>Painel do Administrador</h1>

<p>Selecione uma das opçoes abaixo:</p>

  <ul>
    <li><a href="painel-adm-ativar-usuarios.php">Usuários Aguardando ativação</a></li>
    <li><a href="painel-adm-idiomas.php">Idiomas</a></li>
    <li><a href="painel-adm-paises.php">Países</a></li>
    <li><a href="painel-adm-equipes.php">Equipes</a></li>
    <li><a href="painel-adm-updates.php">Updates database</a></li>
  </ul>

<?php
  include_once("footer.php");
}
else {
  $_SESSION["danger"] = "Você não é adm e não tem permissão para acessar essa página";
  header("Location: index.php");
}

 ?>
