<?php include_once("conexao.php");
include_once("banco_login.php");
?>
<html>
<head>
  <title>Guarnineri007</title>
  <meta charset="utf-8" lang="pt-br">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>html,head,body{width:100%;height:100%;border:0;margin:0px;padding:0px;background-color:var(--fundocolor);color:#fff;text-shadow:-1px 0 #000, 0 1px #b8b5b5, 1px 0 #000, 0 -1px #b8b5b5;font-family:DejaVu Sans Bold, fantasy;font-size:16px;position:relative;background-color:#19002d}#head{width:100%;height:45px;background-color:#000;position:absolute}#logo{width:20%;height:45px;position:absolute;text-align:center}.hidden{display:none}#tudo{width:100%;height:calc(100% - 100px);position:absolute}#sidebar{position:fixed;top:0px;left:-30%;background-color:#000;color:#fff;height:100%;width:30%;z-index:1}.backgroundEscuro{background-color:rgba(0, 0, 0, 0.9 );background:red;background:-webkit-linear-gradient(left, #431758, #ad3030, #851212);background:-o-linear-gradient(right, #431758, #ad3030, #851212);background:-moz-linear-gradient(right, #431758, #ad3030, #851212);background:linear-gradient(to right, #431758, #ad3030, #851212);border-bottom:1px solid #000}#menu_cabecalho{width:80%;height:45px;position:absolute;top:0px;right:0px;color:#fff;text-shadow:1px 1px 2px black, 1px 1px 4px #ff1}#menu_cabecalho *{text-decoration:none;color:#fff}#menu_cabecalho ul{list-style-type:none}#logo img{margin-top:10px}#menu_cabecalho ul li{display:inline;margin-left:20px}.photo{width:85px;height:85px;border-radius:10px;border:2px #000 solid; background-color: #fff}#conteudo{width:100%;height:auto}#contenedor{margin-left:auto;margin-right:auto;margin-top:100px;width:100%;min-height:70%}:root{--fundocolor: #bc8dc6}</style>
</head>

<body>
  <input id="toggle" type="checkbox" name="toggle" class="hidden">

  <div id="sidebar">
    teste
  </div>

  <div id="tudo">
  <div id="head" class="backgroundEscuro">
      <div id="logo">
        <a href="index.php"><img src="img/linux_logo.png" class="photo"></a>
      </div>
      <div id="menu_cabecalho">
        <ul>
          <label for="toggle" class="pointer"><li>&#9776;</li></label>
          <?php if (!quem_esta_logado()) { ?>
          <li><a href="login.php">Login</a></li>
            <?php  } ?>

          <?php if (quem_esta_logado()) { ?>
            <li><a href="deslogar.php">Logout <?= temApelido() ?></a></li>
            <li><a href="cadastrar.php">Cadastrar Cliente</a></li>
            <li><a href="consultar.php">Consultar Cliente</a></li>

        <?php  }
        if (ehAdm()) { ?>
          <li><a href="painel-adm.php">Painel Adm</a></li>
        <?php }
         ?>
      </ul>
      </div>

  </div>


  <div id="conteudo">
    <div id="contenedor">
      <?php
      if(isset($_SESSION["success"])) {
      ?>
      <div class="aviso sucesso">
        <texto class="sucesso texto">x</texto>
        <p class="alert-success"><?= $_SESSION["success"] ?></p>
      </div>
      <?php
      unset($_SESSION["success"]);
      }
      ?>


      <?php
      if(isset($_SESSION["danger"])) {
      ?>
      <div class="aviso perigo">
        <texto class="perigo texto">x</texto>
        <p class="alert-danger"><?= $_SESSION["danger"] ?></p>
      </div>
      <?php
      unset($_SESSION["danger"]);
      }
