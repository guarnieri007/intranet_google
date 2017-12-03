<?php include_once("conexao.php");
include_once("banco_login.php");
?>
<html>
<head>
  <title>Guarnineri007</title>
  <meta charset="utf-8" lang="pt-br">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>html,head,body{width:100%;height:100%;min-height:100%;border:0;margin:0px;padding:0px;color:#000;font-family:sans-serif;font-size:14px;position:absolute}#head{width:100%;height:45px;background-color:#000;position:absolute}#logo{width:20%;height:45px;position:absolute;text-align:center}.backgroundEscuro{background-color:rgba(0, 0, 0, 0.9 )}#menu_cabecalho{width:80%;height:45px;position:absolute;top:0px;right:0px;color:#fff;text-shadow:1px 1px 2px black, 1px 1px 4px #ff1}#menu_cabecalho *{text-decoration:none;color:#fff}#menu_cabecalho ul{list-style-type:none}#logo img{margin-top:10px}#menu_cabecalho ul li{display:inline;margin-left:20px}.formulario{position:absolute;top:0px;left:0px;width:49%;padding-bottom:0px;background-color:rgba(255, 255, 255, 0.85);box-shadow:5px 5px 0px #000, -5px -5px 0px #acd}.formulario form label{display:inline-block;margin-left:15px;vertical-align:middle;height:20px;padding:8px 0px 5px 0px;width:26%;padding-left:10px;margin-bottom:0px;background-color:#aab;color:#fff;text-shadow:2px 2px 0px #000, 0px 0px 5px #000}.formulario form input,form select{font-size:0.9rem;font-family:cursive;display:inline-block;margin-left:15px;margin-bottom:20px;height:33px;width:60%}.formularios{position:relative;margin-left:auto;margin-right:auto;margin-top:50px;width:90%;min-height:100%}.form-cadastro{width:49%;position:absolute;top:0px;right:0px;font-size:0.95rem;font-family:monospace;background-color:rgba(255, 255, 255, 0.85);box-shadow:5px 5px 0px #000, -5px -5px 0px #acd}.form-cadastro form label{display:inline-block;margin-left:15px;vertical-align:middle;height:20px;padding:8px 0px 5px 0px;width:26%;padding-left:10px;margin-bottom:0px;background-color:#aab;color:#fff;text-shadow:2px 2px 0px #000, 0px 0px 5px #000}.form-cadastro form input{display:inline-block;margin-left:15px;margin-bottom:20px;height:33px;font-size:0.9rem;font-family:cursive;width:60%}.form-cadastro p{margin-left:0px;margin-right:0px;text-align:center;word-wrap:break-word;text-indent:0px;font-size:0.9rem}.form-cadastro-h2{padding-left:10px;padding-top:10px;padding-bottom:2px;margin-bottom:25px;font-size:1.1rem;margin-left:15px;padding-right:0px;color:#fff;width:90%;height:25px;background-color:#acd;text-shadow:2px 2px 0px #000, 0px 0px 5px #000}.photo{width:85px;height:85px;border-radius:10px;background-color:#fff}#conteudo{margin-top:45px;width:100%;min-height:100%;}#contenedor{margin-left:auto;margin-right:auto;margin-top:100px;width:90%;min-height:70%;}#contenedor form p{width:100%}:root{--fundocolor:rgba(255, 255, 17, 0.55)}</style>
</head>

<body>
  <input id="toggle" type="checkbox" name="toggle" class="hidden">

  <div id="sidebar">
    teste
  </div>

  <div id="tudo">
  <div id="head" class="backgroundEscuro">
      <div id="logo">
        <a href="/index.php"><img src="/img/linux_logo.png" class="photo"></a>
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
