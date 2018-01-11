<?php  include_once("cabecalho.php");
if ((!$_SESSION['usuario_logado']) == NULL) {
?>

<form action="inserir.php" method="post">
  <div class="fomulario"><div class="classe1">Site: </div><div class="classe2"><input type="text" id="site" name="site"></div></div>
  <div class="fomulario"><div class="classe1">Nome WebMaster: </div><div class="classe2"><input type="text" id="nombreDesarrollador" name="webmaster_nome"></div></div>
  <div class="fomulario"><div class="classe1">Email do WebMaster: </div><div class="classe2"><input type="text" id="correo" name="webmaster_email"></div></div>
  <div class="fomulario"><div class="classe1">Telefone do WebMaster: </div><div class="classe2"><input type="text" id="telefono" name="webmaster_telefone"></div></div>
  <div class="fomulario"><div class="classe1">Data da reunião: </div><div class="classe2"><input type="date" id="fecha" name="agendamento"></div></div>
  <div class="fomulario"><div class="classe1">Horário: </div><div class="classe2"><input type="time" id="horario" name="horario_agen"></div></div>
  <div class="fomulario"><div class="classe1">email do sales rep: </div><div class="classe2"><input type="text" id="correoAlguien" name="sales_rep_email"></div></div>
  <input type="hidden" name="mercado" value=""><input type="hidden" name="ms3"value="<?= $_SESSION['id_usuario'] ?>">
  <p><input type="submit" value="Salvar"></p>
</form>

<!--
Vou incluir aqui o código novo.
-->
<!--
<textarea rows="15" cols="50" id="textArea">
Preencha aqui os dados do cliente utilizando preferencialmente a ferramenta do Danilo nesse link <a href="https://docs.google.com/spreadsheets/d/1Ntjm7WH4M-jlHHAXqqTCjHQcEqt0I2VwQNYsFB3a_Bs/edit#gid=611312487">aqui.</a> e por favor apague este texto para evitar erro.
</textarea>
<a onclick="lele()" href="#">Quando terminar de preencher o campo acima, clique aqui para atualizar</a><br><br>
-->
<!--
Terminou aqui o formulário novo.
-->
<script src="js/correo.js"></script>
<?php
  include_once("footer.php");
} else {
  $_SESSION["danger"] = "Você deve estar logado para poder acessar";
  header("Location: index.php");
}
 ?>
