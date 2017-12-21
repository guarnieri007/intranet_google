<?php  include_once("cabecalho.php");
      include_once("bClientes.php");
      include_once("banco_login.php");
      include_once("class/cliente.php");
	  include_once("banco_adm.php");
	  include_once("usuario.php");

$id = $_POST['cliente'];
$pesquisa = pesquisarCliente($conexao, $id);


$cliente = new cliente($pesquisa["webmaster_nome"], $pesquisa["webmaster_email"], $pesquisa["webmaster_telefone"], $pesquisa["site"], $pesquisa["agendamento"], $pesquisa["horario_agen"], $pesquisa["cli_mercado"], $pesquisa["cli_ms3"]);
$cliente->setSales_Rep_Email($pesquisa['sales_rep_email']);
$cliente->setCliente_Id($id);

$idiomas = buscaIdiomas($conexao);

?>

<form class="formulario1" action="editar-cliente.php" method="post">
  <input type="hidden" name="id_cliente" value="<?=$cliente->getCliente_Id() ?>">
  <input type="hidden" name="operador" value="<?=$cliente->getOperador() ?>">
  <input type="hidden" name="mercado" value="<?=$cliente->getMercado() ?>">
<ul><li>URL do Site:</li>
  <li><input type="text" name="site" id="url" value="<?=$cliente->getSite() ?>" placeholder="www.cognizant.com"></li>
</ul>
<ul><li>Nome do Webmaster:</li>
  <li><input type="text" name="webmaster_nome" id="nombreDesarrollador" value="<?= $cliente->getWebmaster_Nome() ?>" placeholder="Nombre"></li>
</ul>
<ul><li>Telefone de contato (webmaster):</li>
  <li><input type="text" name="webmaster_telefone" id="telefono" value="<?= $cliente->getWebmaster_Telefone() ?>" placeholder="+54 34 15248521"></li>
</ul>
  <ul><li>Email do webmaster:</li>
  <li><input type="text" name="webmaster_email" id="correo" value="<?=$cliente->getWebmaster_Email() ?>" placeholder="ejemplo@correo.com.ar"></li>
</ul>
  <ul><li>Email do sales rep e quem mais for necessário:</li>
  <li><input type="text" name="sales_rep_email" id="correoAlguien" value="<?=$cliente->getSales_Rep_Email() ?>" placeholder="otroejemplo@correo.com.ar"></li>
</ul>
  <ul><li>Data da reunião:</li>
  <li><input type="date" name="agendamento" id="fecha" value="<?=$cliente->getAgendamento() ?>" placeholder="1989-11-08"></li>
</ul>
  <ul><li>horário da reunião:</li>
  <li><input type="time" name="horario_agen" id="horario" value="<?=$cliente->getHorario_Agen() ?>" placeholder="05:30 AM"></li>
</ul>

</ul>
  <ul><li>Idioma:</li>
  <li>
  <select name="language" id="language">
<?php	foreach ($idiomas as $idioma): ?>
    <option value="<?= $idioma['abreviacao']?>" id="<?= $idioma['abreviacao']?>"><?= $idioma['idioma']?></option>
<?php endforeach ?>
  </select>
  </li>
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
      ?><option value="<?= $usuario['nome'] ?>" <?php if ($usuario['id_usuario'] == $_SESSION["id_usuario"]) {echo "selected";} ?> id="<?= $usuario['nome'] ?>"><?= $usuario['nome'] ?></option>
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
<p><label for="renderjs"   ><input type="checkbox" id="renderjs"    name="renderjs" value="renderjs">       Render Blocking JS                   </label>    </p>
<p><label for="rendercss"  ><input type="checkbox" id="rendercss"   name="rendercss" value="rendercss">     Render Blocking CSS                   </label>    </p>
<p><label for="redirects"  ><input type="checkbox" id="redirects"   name="redirects" value="redirects">     Evitar redirecionamento de páginas   </label>    </p>
<p><label for="gzip"       ><input type="checkbox" id="gzip"        name="gzip" value="gzip">               Ativar compressão Gzip               </label>    </p>
<p><label for="keepAlive"  ><input type="checkbox" id="keepAlive"   name="keepAlive" value="keepAlive">     Ativar Keep Alive                    </label>    </p>
<p><label for="preconnect" ><input type="checkbox" id="preconnect"  name="preconnect" value="preconnect">   Utilizar Preconnect                  </label>    </p>
<p><label for="caching"    ><input type="checkbox" id="caching"     name="caching" value="caching">         Ativar caching                       </label>    </p>
<p><label for="imagens"    ><input type="checkbox" id="imagens"     name="imagens" value="imagens">         Otimizar imagens                     </label>    </p>
<p><label for="imagensdup" ><input type="checkbox" id="imagensdup"  name="imagensdup" value="imagensdup">   Remover imagens duplicadas           </label>    </p>
<p><label for="sprites"    ><input type="checkbox" id="sprites"     name="sprites" value="sprites">         Combinar imagens em Sprites CSS      </label>    </p>
<p><label for="minicss"    ><input type="checkbox" id="minicss"     name="minicss" value="minicss">         Minificar Arquivos CSS               </label>    </p>
<p><label for="minijs"     ><input type="checkbox" id="minijs"      name="minijs" value="minijs">           Minificar Arquivos JS                </label>    </p>
<p><label for="minihtml"   ><input type="checkbox" id="minihtml"    name="minihtml" value="minihtml">       Minificar Arquivos html              </label>    </p>
<p><label for="conteudovis"><input type="checkbox" id="conteudovis" name="conteudovis" value="conteudovis"> Priorizar conteúdo visível           </label>    </p>
<p><label for="lazyScripts"><input type="checkbox" id="lazyScripts" name="lazyScripts" value="lazyScripts"> Utilizar lazyScripts                 </label>    </p>
<p><label for="cdn"        ><input type="checkbox" id="cdn"         name="cdn" value="cdn">                 Utilizar CDN                         </label>    </p>

</form>

		  </div>

		  <div class="sub50 fright">

		  <h2>Tratativas pendentes</h2>
<form action="#">
<p><label for="pendrenderjs"   > <input type="checkbox" id="pendrenderjs"    name="pendrenderjs"   value="1">Render Blocking JS                  </label>    </p>
<p><label for="pendrendercss"  > <input type="checkbox" id="pendrendercss"   name="pendrendercss"  value="1">Render Blocking CSS                 </label>    </p>
<p><label for="pendredirects"  > <input type="checkbox" id="pendredirects"   name="pendredirects"  value="1">Evitar redirecionamento de páginas  </label>    </p>
<p><label for="pendgzip"       > <input type="checkbox" id="pendgzip"        name="pendgzip"       value="1">Ativar compressão Gzip              </label>    </p>
<p><label for="pendkeepAlive"  > <input type="checkbox" id="pendkeepAlive"   name="pendkeepAlive"  value="1">Ativar Keep Alive                   </label>    </p>
<p><label for="pendpreconnect" > <input type="checkbox" id="pendpreconnect"  name="pendpreconnect" value="1">Utilizar Preconnect                 </label>    </p>
<p><label for="pendcaching"    > <input type="checkbox" id="pendcaching"     name="pendcaching"    value="1">Ativar caching                      </label>    </p>
<p><label for="pendimagens"    > <input type="checkbox" id="pendimagens"     name="pendimagens"    value="1">Otimizar imagens                    </label>    </p>
<p><label for="pendimagensdup" > <input type="checkbox" id="pendimagensdup"  name="pendimagensdup" value="1">Remover imagens duplicadas          </label>    </p>
<p><label for="pendsprites"    > <input type="checkbox" id="pendsprites"     name="pendsprites"    value="1">Combinar imagens em Sprites CSS     </label>    </p>
<p><label for="pendminicss"    > <input type="checkbox" id="pendminicss"     name="pendminicss"    value="1">Minificar Arquivos CSS              </label>    </p>
<p><label for="pendminijs"     > <input type="checkbox" id="pendminijs"      name="pendminijs"     value="1">Minificar Arquivos JS               </label>    </p>
<p><label for="pendminihtml"   > <input type="checkbox" id="pendminihtml"    name="pendminihtml"   value="1">Minificar Arquivos html             </label>    </p>
<p><label for="pendconteudovis"> <input type="checkbox" id="pendconteudovis" name="pendconteudovis"value="1">Priorizar conteúdo visível          </label>    </p>
<p><label for="pendlazyScripts"> <input type="checkbox" id="pendlazyScripts" name="pendlazyScripts"value="1">Utilizar lazyScripts                </label>    </p>
<p><label for="pendcdn"        > <input type="checkbox" id="pendcdn"         name="pendcdn"        value="1">Utilizar CDN                        </label>    </p>

</form>

		  </div>


		  </div>


<input type="button" value="Generar" id="generar" class="botao1">
<div id="erro" class="esconder">Tenemos un error, se hace necesario llenar todo el formulario.</div>
</div>
<br>
<div id="mensaje" class="sub100"></div>

<script src="js/correo.js"></script>
<?php
  include_once("footer.php");
 ?>
