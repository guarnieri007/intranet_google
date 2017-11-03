<?php  include_once("cabecalho.php");
      include_once("bClientes.php");
      include_once("banco_login.php");

$id = $_POST['cliente'];
$cliente = pesquisarCliente($conexao, $id);
?>

<form class="formulario1" action="editar-cliente.php" method="post">
  <input type="hidden" name="id_cliente" id="url" value="<?=$cliente['cliente_id'] ?>">
<ul><li>URL do Site:</li>
  <li><input type="text" name="site" id="url" value="<?=$cliente['site'] ?>" placeholder="www.cognizant.com"></li>
</ul>
<ul><li>Nome do Webmaster:</li>
  <li><input type="text" name="webmaster_nome" id="nombreDesarrollador" value="<?=$cliente['webmaster_nome'] ?>" placeholder="Nombre"></li>
</ul>
<ul><li>Telefone de contato (webmaster):</li>
  <li><input type="text" name="webmaster_telefone" id="telefono" value="<?=$cliente['webmaster_telefone'] ?>" placeholder="+54 34 15248521"></li>
</ul>
  <ul><li>Email do webmaster:</li>
  <li><input type="text" name="webmaster_email" id="correo" value="<?=$cliente['webmaster_email'] ?>" placeholder="ejemplo@correo.com.ar"></li>
</ul>
  <ul><li>Email do sales rep e quem mais for necessário:</li>
  <li><input type="text" name="sales_rep_email" id="correoAlguien" value="<?=$cliente['sales_rep_email'] ?>" placeholder="otroejemplo@correo.com.ar"></li>
</ul>
  <ul><li>Data da reunião:</li>
  <li><input type="date" name="agendamento" id="fecha" value="<?=$cliente['agendamento'] ?>" placeholder="1989-11-08"></li>
</ul>
  <ul><li>horário da reunião:</li>
  <li><input type="time" name="horario_agen" id="horario" value="<?=$cliente['horario_agen'] ?>" placeholder="05:30 AM"></li>
</ul>

<ul><li>
  <table class="centralizar tabela1">
    <tr><th>Escolha o tipo do email:</th><th>Eu me chamo:</th></tr>

    <tr><td>
    <select name="tipo" id="tipo">
    <option value="primer" id="primer">Primeiro email</option>
    <option value="segundo" id="segundo">Segundo email</option>
	<option value="terceiro" id="segundo">Terceiro email</option>
  </select>
</td>

  <td>
  <select name="mi" id="mi">

    <?php
$usuarios = listarUsuariosFuncoes($conexao, $_SESSION['permissao']);
    foreach ($usuarios as $usuario):
      ?><option value="<?= $usuario['nome'] ?>" id="<?= $usuario['nome'] ?>"><?= $usuario['nome'] ?></option>
   <?php endforeach; ?>
    <!--
    <option value="Felipe Guarnieri" id="Felipe">Felipe Guarnieri</option>
    <option value="Danilo Araujo" id="DaniloA">Danilo Araujo</option>
    <option value="André Victorino" id="Andre">André Victorino</option>
  -->
  </select>
</td>
</tr>
</table>

<input type="submit" value="Guardar Alterações" class="botao1">
</form>
</li></ul>
		  <div id="opcoes" class="esconder">
		  <div class="sub50">
		  <h2>Tratativas realizadas</h2>
<form action="#">
<p><input type="checkbox" id="renderjs"    name="renderjs" value="renderjs">      <label for="renderjs"   > Render Blocking JS                   </label>    </p>
<p><input type="checkbox" id="rendercss"   name="rendercss" value="rendercss">    <label for="rendercss"  > Render Blocking CSS                   </label>    </p>
<p><input type="checkbox" id="redirects"   name="redirects" value="redirects">    <label for="redirects"  > Evitar redirecionamento de páginas   </label>    </p>
<p><input type="checkbox" id="gzip"        name="gzip" value="gzip">              <label for="gzip"       > Ativar compressão Gzip               </label>    </p>
<p><input type="checkbox" id="keepAlive"   name="keepAlive" value="keepAlive">    <label for="keepAlive"  > Ativar Keep Alive                    </label>    </p>
<p><input type="checkbox" id="preconnect"  name="preconnect" value="preconnect">  <label for="preconnect" > Utilizar Preconnect                  </label>    </p>
<p><input type="checkbox" id="caching"     name="caching" value="caching">        <label for="caching"    > Ativar caching                       </label>    </p>
<p><input type="checkbox" id="imagens"     name="imagens" value="imagens">        <label for="imagens"    > Otimizar imagens                     </label>    </p>
<p><input type="checkbox" id="imagensdup"  name="imagensdup" value="imagensdup">  <label for="imagensdup" > Remover imagens duplicadas           </label>    </p>
<p><input type="checkbox" id="sprites"     name="sprites" value="sprites">        <label for="sprites"    > Combinar imagens em Sprites CSS      </label>    </p>
<p><input type="checkbox" id="minicss"     name="minicss" value="minicss">        <label for="minicss"    > Minificar Arquivos CSS               </label>    </p>
<p><input type="checkbox" id="minijs"      name="minijs" value="minijs">          <label for="minijs"     > Minificar Arquivos JS                </label>    </p>
<p><input type="checkbox" id="minihtml"    name="minihtml" value="minihtml">      <label for="minihtml"   > Minificar Arquivos html              </label>    </p>
<p><input type="checkbox" id="conteudovis" name="conteudovis" value="conteudovis"><label for="conteudovis"> Priorizar conteúdo visível           </label>    </p>
<p><input type="checkbox" id="lazyScripts" name="lazyScripts" value="lazyScripts"><label for="lazyScripts"> Utilizar lazyScripts                 </label>    </p>
<p><input type="checkbox" id="cdn"         name="cdn" value="cdn">                <label for="cdn"        > Utilizar CDN                         </label>    </p>

</form>

		  </div>

		  <div class="sub50 fright">

		  <h2>Tratativas pendentes</h2>
<form action="#">
<p><input type="checkbox" id="pendrenderjs"    name="pendrenderjs"   value="1"><label for="pendrenderjs"   > Render Blocking JS                  </label>    </p>
<p><input type="checkbox" id="pendrendercss"   name="pendrendercss"  value="1"><label for="pendrendercss"  > Render Blocking CSS                 </label>    </p>
<p><input type="checkbox" id="pendredirects"   name="pendredirects"  value="1"><label for="pendredirects"  > Evitar redirecionamento de páginas  </label>    </p>
<p><input type="checkbox" id="pendgzip"        name="pendgzip"       value="1"><label for="pendgzip"       > Ativar compressão Gzip              </label>    </p>
<p><input type="checkbox" id="pendkeepAlive"   name="pendkeepAlive"  value="1"><label for="pendkeepAlive"  > Ativar Keep Alive                   </label>    </p>
<p><input type="checkbox" id="pendpreconnect"  name="pendpreconnect" value="1"><label for="pendpreconnect" > Utilizar Preconnect                 </label>    </p>
<p><input type="checkbox" id="pendcaching"     name="pendcaching"    value="1"><label for="pendcaching"    > Ativar caching                      </label>    </p>
<p><input type="checkbox" id="pendimagens"     name="pendimagens"    value="1"><label for="pendimagens"    > Otimizar imagens                    </label>    </p>
<p><input type="checkbox" id="pendimagensdup"  name="pendimagensdup" value="1"><label for="pendimagensdup" > Remover imagens duplicadas          </label>    </p>
<p><input type="checkbox" id="pendsprites"     name="pendsprites"    value="1"><label for="pendsprites"    > Combinar imagens em Sprites CSS     </label>    </p>
<p><input type="checkbox" id="pendminicss"     name="pendminicss"    value="1"><label for="pendminicss"    > Minificar Arquivos CSS              </label>    </p>
<p><input type="checkbox" id="pendminijs"      name="pendminijs"     value="1"><label for="pendminijs"     > Minificar Arquivos JS               </label>    </p>
<p><input type="checkbox" id="pendminihtml"    name="pendminihtml"   value="1"><label for="pendminihtml"   > Minificar Arquivos html             </label>    </p>
<p><input type="checkbox" id="pendconteudovis" name="pendconteudovis"value="1"><label for="pendconteudovis"> Priorizar conteúdo visível          </label>    </p>
<p><input type="checkbox" id="pendlazyScripts" name="pendlazyScripts"value="1"><label for="pendlazyScripts"> Utilizar lazyScripts                </label>    </p>
<p><input type="checkbox" id="pendcdn"         name="pendcdn"        value="1"><label for="pendcdn"        > Utilizar CDN                        </label>    </p>

</form>

		  </div>


		  </div>


<input type="button" value="Generar" id="generar" class="botao1">
<div id="erro" class="esconder">Tenemos un error, se hace necesario llenar todo el formulario.</div>
</div>
<br>
<div id="mensaje" class="sub100"></div>

<script src="/js/correo.js"></script>
<?php
  include_once("footer.php");
 ?>
