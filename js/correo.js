
	function adicionarTratados(trataveis, opcao) {

		trataveis.push(opcao);
	}

var opcoes = document.querySelector("#tipo");

if (opcoes) {
	opcoes.addEventListener("change", function(){
		var opcoes = document.querySelector("#tipo").value;
		if (opcoes == "terceiro") {
			document.querySelector("#opcoes").classList.remove("esconder");
		}/*final do if ser iguao terceito */else {document.querySelector("#opcoes").classList.add("esconder");}
	});
}

function generarCorreo() {
	
	var idioma=document.querySelector("#language").value;
	console.log(idioma);
	if (idioma == "ES") {
	var tratados=[];
	var pendentes=[];
	var algoPendente = 0;
	var algoHecho = 0;
	var mensaje = document.getElementById("mensaje");
	var corpo = ["<p>Mientras este es un buen logro, mantenga el buen trabajo! Por cada 1-segundo menos de tiempo de carga, el negocio experimentará un aumento del 3,5% en las conversiones.</p>", "<p>Abajo están algunas recomendaciones para mejorar la velocidad de su sitio móvil que no tuvimos tiempo para hacer:</p>", "<p>Abajo están las recomendaciones para mejorar la velocidad de su sitio móvil que platicamos:</p>"];
	var faltaAlgo = "<p>Nosotros queremos la mejor experiencia para sus clientes! Por favor haga referencia a su Guía de consulta para Velocidad de Sitio Móvil para asistencia.<br><br>Esperamos poder experimentar la mejor velocidad de su sitio móvil. Avísenos tan pronto haga los cambios o si tiene alguna duda.</p>"
	var tudoFeito ="<p>Y para aprovechar al máximo su sitio móvil mejorado, no olvide optimizar su cuenta de AdWords con su representante de Google.</p>"
	var footer = "";
	var texto1 = "";

	var feitorenderjs ="Evitar el bloqueo de JavaScript en la parte de arriba";
	var feitorendercss ="Evitar el bloqueo de CSS en la parte de arriba";
	var feitoredirects ="Quitar redirecionamento";
    var feitogzip ="Activar la compresión con Gzip";
    var feitokeepAlive ="Activar Keep Alive";
    var feitopreconnect ="Utilizar preConnect";
    var feitocaching ="Activar cache y especificar el tiempo de expiración";
    var feitoimagens ="Optimizar las imágenes";
    var feitoimagensdup ="Evitar subir al servidor imágenes repetidas";
    var feitosprites ="Utilizar Sprites";
    var feitominicss ="Minificar los archivos de CSS";
    var feitominijs ="Minificar los archivos de JS";
    var feitominihtml ="Minificar los archivos de html";
    var feitoconteudovis ="Priorizar el contenido visible de la parte de arriba con el CSS Crítico(Critical CSS)";
    var feitolazyScripts ="Utilizar Lazy Scripts";
    var feitocdn ="Utilizar CDN";

	var pendrenderjs    ="Evitar el bloqueo de JavaScript";
	var pendrendercss   ="Evitar el bloqueo de CSS";
	var pendredirects   ="Quitar redirecionamentos";
    var pendgzip        ="Activar compressión con Gzip";
    var pendkeepAlive   ="Activar Keep Alive";
    var pendpreconnect  ="Utilizar preConnect";
    var pendcaching     ="Activar cache y especificar el tiempo de expiración";
    var pendimagens     ="Optimizar las imágenes";
    var pendimagensdup  ="Evitar subir al servidor imágenes repetidas";
    var pendsprites     ="Utilizar Sprites";
    var pendminicss     ="Minificar los archivos de CSS";
    var pendminijs      ="Minificar los archivos de JS";
    var pendminihtml    ="Minificar los archivos de html";
    var pendconteudovis ="Priorizar el contenido visible de la parte de arriba con el CSS Crítico(Critical CSS)";
    var pendlazyScripts ="Utilizar Lazy Scripts";
    var pendcdn         ="Utilizar CDN";


	var valifeitorenderjs = document.getElementById("renderjs");
	var valifeitorendercss = document.getElementById("rendercss");
	var valifeitoredirects = document.getElementById("redirects");
	var valifeitogzip = document.getElementById("gzip");
	var valifeitokeepAlive = document.getElementById("keepAlive");
	var valifeitopreconnect = document.getElementById("preconnect");
	var valifeitocaching = document.getElementById("caching");
	var valifeitoimagens = document.getElementById("imagens");
	var valifeitoimagensdup = document.getElementById("imagensdup");
	var valifeitosprites = document.getElementById("sprites");
	var valifeitominicss = document.getElementById("minicss");
	var valifeitominijs = document.getElementById("minijs");
	var valifeitominihtml = document.getElementById("minihtml");
	var valifeitoconteudovis = document.getElementById("conteudovis");
	var valifeitolazyScripts = document.getElementById("lazyScripts");
	var valifeitocdn = document.getElementById("cdn");

	var noHechorenderjs =       document.getElementById("pendrenderjs");
	var noHechorendercss =      document.getElementById("pendrendercss");
	var noHechoredirects =      document.getElementById("pendredirects");
	var noHechogzip =           document.getElementById("pendgzip");
	var noHechokeepAlive =      document.getElementById("pendkeepAlive");
	var noHechopreconnect =     document.getElementById("pendpreconnect");
	var noHechocaching =        document.getElementById("pendcaching");
	var noHechoimagens =        document.getElementById("pendimagens");
	var noHechoimagensdup =     document.getElementById("pendimagensdup");
	var noHechosprites =        document.getElementById("pendsprites");
	var noHechominicss =        document.getElementById("pendminicss");
	var noHechominijs =         document.getElementById("pendminijs");
	var noHechominihtml =       document.getElementById("pendminihtml");
	var noHechoconteudovis =    document.getElementById("pendconteudovis");
	var noHecholazyScripts =    document.getElementById("pendlazyScripts");
	var noHechocdn =            document.getElementById("pendcdn");

	var url = document.querySelector("#url").value;
	var nombreDesarrollador = document.getElementById("nombreDesarrollador").value;
	var correo = document.getElementById("correo").value;
	var correoAlguien = document.getElementById("correoAlguien").value;
	var telefono = document.getElementById("telefono").value;
	var fecha = document.getElementById("fecha").value;
	var horario = document.getElementById("horario").value;
	var tipo = document.getElementById("tipo").value;
	var mi = document.getElementById("mi").value;
	var mes = fecha.slice(5, 7);
	var dia = diaDeLaSemana(fecha, idioma);
	var date = mesEscrito(mes, idioma);
	var diaNum = fecha.slice(8);
	var fechaCompleta = (diaNum + " de " + date);
	var terminos = '<a href="https://docs.google.com/forms/d/e/1FAIpQLScbHb_eMyNJXEV3CkMBz8rlOfpe_fOOkauCsjWRA1XpZDOOZA/viewform">este enlace</a>';
	if (url == "" || nombreDesarrollador == "" || correo == "" || telefono == "" || fecha == "" || horario == "" || tipo == "") {
		olvido = document.querySelector("#erro").classList.remove("esconder");
	}else{
		olvido = document.querySelector("#erro").classList.add("esconder");


		if (tipo == "primer") {

		mensaje.innerHTML = "<div class:'email_options'>Para: <input type='text' name='para' value='" + correo + "'><br>Con Copia: <input type='text' name='cc' value='" + correoAlguien + "'><br>Asunto: <input type='text' name='asunto' value='Prepárese para su consulta de Velocidad en Sitios Móviles - " + url + "'></div><div class='email_mensagem'><br><br>Mensaje: <br><br><div  id='mens' contenteditable='true'>Hola " + nombreDesarrollador + ",<br><br>¡Espero que esté muy bién! Mi nombre es " + mi + " y soy especialista en la optimización de velocidad en sitios móviles en Google. Yo seré su punto de contacto para nuestra consulta del sitio " + url + "<br><br>Se ha establecido una reunión para nuestra consulta el próximo <b>" + dia + " " + fechaCompleta + "</b> a las <b>" + horario + "</b>. Y llamaré al teléfono <b>" + telefono + "</b>. Mejorar la velocidad de los sitios móviles es esencial para un negocio exitoso. ¡Estamos muy emocionados por trabajar contigo y hacer de esto una realidad!<br><br>Antes de nuestra llamada, por favor:<br><ol><li>Repase la presentación adjunta respecto nuestras expectativas de implementación y el formulario de consentimiento antes de la reunión<ul><li>Por favor provea de antemano el consentimiento de que ha revisado los términos y condiciones en " + terminos + ".</li></ul></li><li>Por favor confirme: ¿Estará presente un desarrollador web con derechos de administrador para su sitio (e.g FTP o un panel con derechos de administrador) en la llamada?<ul><li>Nuestra consulta tendrá resultados limitados si no tenemos contacto directo con un desarrollador. Tenga en cuenta que no podremos realizar ninguna implementación en la primer llamada si su equipo no tiene derechos administrativos.</li></ul></li><li>Haga una copia de seguridad de su sitio antes de la llamada.</li><li>Esté presente con su computadora listo para la reunión<ul><li>Probablemente necesitaremos hacer una sesión de pantalla compartida para revisar su sitio juntos.</li></li></li></ol>Antes de nuestra llamada también le enviaremos un email de seguimiento con el análisis realizado de su sitio. Esto va ser la base de nuestra llamada, así que lo invitamos a revisarlo.</div></div>"

		}else if(tipo == "segundo") {

		mensaje.innerHTML = "<div class:'email_options'>Para: <input type='text' name='para' value='" + correo + "'><br>Con Copia: <input type='text' name='cc' value='" + correoAlguien + "'><br>Asunto: <input type='text' name='asunto' value='Tu Consulta de velocidad para sitios móviles - " + url + "'><br><br><div  id='mens' contenteditable='true'>Hola " + nombreDesarrollador + ",<br><br>¡Espero que esté muy bien!<br><br>Soy " + mi + " especialista del equipo de optimización para sitios móviles de Google. Este correo es para confirmar su reunión programada para el próximo <b>" + dia + " " + fechaCompleta + "</b> a las <b>" + horario +"</b>.<br><br>En la llamada, vamos a hablar acerca de problemas que afectan la velocidad de su sitio para dispositivos móviles y, si posible, completar algunas soluciones rápidas. Cómo ya sabrá, los clientes están utilizando cada vez más sus teléfonos para comprar productos. Un sitio rápido significa más clientes, más compras y más ganancias para su negocio.<br><ul><li>Para aprovechar mejor su tiempo, por favor asegúrese de que alguien tenga todas las credenciales de acceso necesarias (cpanel, ssh, plex).</li><li>Si por alguna razón ya no puede atender la llamada programada, por favor avísenos tan pronto como sea posible, dando otro horario en el cual esté disponible para la llamada. Por último, estamos compartiendo un archivo con la información personalizada Consulta de Velocidad para sitios Móviles, una guía paso a paso de las oportunidades a mejorar en su sitio para determinados puntos. Espero que tenga oportunidad de revisarlo.</li></ul><br>Quedo al pendiente.</div>"

		}else if(tipo == "terceiro") {
			mensaje.innerHTML="";
				tratados.length=0;
			if (valifeitorenderjs.checked)    {algoHecho = 1; adicionarTratados(tratados, feitorenderjs);}
		  if(valifeitorendercss.checked )   {algoHecho = 1; adicionarTratados(tratados, feitorendercss);}
			if(valifeitoredirects.checked)    {algoHecho = 1; adicionarTratados(tratados, feitoredirects);}
			if(valifeitogzip.checked)         {algoHecho = 1; adicionarTratados(tratados, feitogzip);}
			if(valifeitokeepAlive.checked)    {algoHecho = 1; adicionarTratados(tratados, feitokeepAlive);}
			if(valifeitopreconnect.checked)   {algoHecho = 1; adicionarTratados(tratados, feitopreconnect);}
			if(valifeitocaching.checked)      {algoHecho = 1; adicionarTratados(tratados, feitocaching);}
			if(valifeitoimagens.checked)      {algoHecho = 1; adicionarTratados(tratados, feitoimagens);}
			if(valifeitoimagensdup.checked)   {algoHecho = 1; adicionarTratados(tratados, feitoimagensdup);}
			if(valifeitosprites.checked)      {algoHecho = 1; adicionarTratados(tratados, feitosprites);}
			if(valifeitominicss.checked)      {algoHecho = 1; adicionarTratados(tratados, feitominicss);}
			if(valifeitominijs.checked)       {algoHecho = 1; adicionarTratados(tratados, feitominijs);}
			if(valifeitominihtml.checked)     {algoHecho = 1; adicionarTratados(tratados, feitominihtml);}
			if(valifeitoconteudovis.checked)  {algoHecho = 1; adicionarTratados(tratados, feitoconteudovis);}
			if(valifeitolazyScripts.checked)  {algoHecho = 1; adicionarTratados(tratados, feitolazyScripts);}
			if(valifeitocdn.checked)          {algoHecho = 1; adicionarTratados(tratados, feitocdn);}

			if(noHechorenderjs.checked)    {algoPendente = 1; adicionarTratados(pendentes, pendrenderjs);}
			if(noHechorendercss.checked)   {algoPendente = 1; adicionarTratados(pendentes, pendrendercss);}
			if(noHechoredirects.checked)   {algoPendente = 1; adicionarTratados(pendentes, pendredirects);}
			if(noHechogzip.checked)        {algoPendente = 1; adicionarTratados(pendentes, pendgzip);}
			if(noHechokeepAlive.checked)   {algoPendente = 1; adicionarTratados(pendentes, pendkeepAlive);}
			if(noHechopreconnect.checked)  {algoPendente = 1; adicionarTratados(pendentes, pendpreconnect);}
			if(noHechocaching.checked)     {algoPendente = 1; adicionarTratados(pendentes, pendcaching);}
			if(noHechoimagens.checked)     {algoPendente = 1; adicionarTratados(pendentes, pendimagens);}
			if(noHechoimagensdup.checked)  {algoPendente = 1; adicionarTratados(pendentes, pendimagensdup);}
			if(noHechosprites.checked)     {algoPendente = 1; adicionarTratados(pendentes, pendsprites);}
			if(noHechominicss.checked)     {algoPendente = 1; adicionarTratados(pendentes, pendminicss);}
			if(noHechominijs.checked)      {algoPendente = 1; adicionarTratados(pendentes, pendminijs);}
			if(noHechominihtml.checked)    {algoPendente = 1; adicionarTratados(pendentes, pendminihtml);}
			if(noHechoconteudovis.checked) {algoPendente = 1; adicionarTratados(pendentes, pendconteudovis);}
			if(noHecholazyScripts.checked) {algoPendente = 1; adicionarTratados(pendentes, pendlazyScripts);}
			if(noHechocdn.checked)         {algoPendente = 1; adicionarTratados(pendentes, pendcdn);}


				 var faltam ="";
				 var implementacoes = "";
				 if (algoPendente && !algoHecho) {
					 footer = faltaAlgo;
					 texto1 = corpo[2];
				 }else if (algoPendente && algoHecho){
					 footer = faltaAlgo;
					 texto1 = corpo[1];
				 }else {
					 footer = tudoFeito;
					 texto1 = corpo[0];
				 }
				 var tratativas = "";

			var i =0;
			while(i<tratados.length -1) {implementacoes+=tratados[i] + ", ";i++;};
			implementacoes+=tratados[i] + ".";

			var i=0;
			while(i<pendentes.length) {faltam+="<li>" + pendentes[i] + "</li>";i++};

			if (algoHecho) {
		 	tratativas = "Para recordar, nos centramos en los siguientes problemas durante la llamada: " + implementacoes;
		 }

			mensaje.innerHTML="<div class:'email_options'>Para: <input type='text' name='para' value='" + correo + "'><br>Con Copia: <input type='text' name='cc' value='" + correoAlguien + "'><br>Asunto: <input type='text' name='asunto' value='Resumen de nuestra consulta - " + url + "'></div><div class='email_mensagem'><br><br>Mensaje: <br><br><div  id='mens' contenteditable='true'>Hola " + nombreDesarrollador + ",<br><br>Gracias por contestar mi llamada hoy. Cómo he mencionado, la velocidad de carga de un sitio web tiene un enorme impacto en la tasa del 'website bounce' y en la experiencia general del usuario en su sitio. <br><br>" + tratativas + texto1 + faltam + "</ul>" + footer + "<br>Saludos.</div>";


		}
	}
}/*fim do if espanhol*/

else if (idioma == "PT-br" || idioma == "PT-br") {
	var tratados=[];
	var pendentes=[];
	var algoPendente = 0;
	var algoHecho = 0;
	var mensaje = document.getElementById("mensaje");
	var corpo = ["<p>Embora esta seja uma boa conquista, mantenha o bom trabalho! Por cada 1-segundo a menos no tempo de carregamento, seu negócio experimetará um aumento de 3,5% nas taxas de conversões.</p>", "<p>Abaixo estão as recomendações para melhorar a velocidade do seu site que não tivemos tempo para fazer:</p>", "<p>Abaixo estão as recomendações para melhorar a velocidade do seu site que havíamos conversado:</p>"];
	var faltaAlgo = "<p>Nós queremos a melhor experiência para seus clientes!Por favor tenha como referência o <b>Guia de Consulta de Velocidade de Site Móvel</b> para auxiliá-lo.<br><br>Estamos ansiosos para experimentar a velocidade do seu site móvel. Por favor nos avise assim que você realizar as alterações ou se tiver alguma dúvida.</p>"
	var tudoFeito ="<p>E para aproveitar ao máximo seu site móvel otimizado, não esqueça de otimizar sua conta do AdWords com um representante Google.</p>"
	var footer = "";
	var texto1 = "";

	var feitorenderjs    ="Evitar o bloqueio de JavaScript na metade superior";
	var feitorendercss   ="Evitar o bloqueio de CSS na metade superior";
	var feitoredirects   ="Remover redirecionamentos";
    var feitogzip        ="Ativar compresão com Gzip";
    var feitokeepAlive   ="Ativar Keep Alive";
    var feitopreconnect  ="Utilizar preConnect";
    var feitocaching     ="Ativar e especificar o tempo de expiração de cache";
    var feitoimagens     ="Otimizar as imagens";
    var feitoimagensdup  ="Evitar subir imagens repetidas no servidor";
    var feitosprites     ="Utilizar Sprites";
    var feitominicss     ="Minificar os arquivos de CSS";
    var feitominijs      ="Minificar os arquivos de JS";
    var feitominihtml    ="Minificar los archivos de html";
    var feitoconteudovis ="Priorizar o conteúdo visível com o CSS Crítico (Critical CSS)";
    var feitolazyScripts ="Utilizar Lazy Scripts";
    var feitocdn         ="Utilizar CDN";

	var pendrenderjs    ="Evitar o bloqueio de JavaScript na metade superior";
	var pendrendercss   ="Evitar o bloqueio de CSS na metade superior";
	var pendredirects   ="Remover redirecionamentos";
    var pendgzip        ="Ativar compresão com Gzip";
    var pendkeepAlive   ="Ativar Keep Alive";
    var pendpreconnect  ="Utilizar preConnect";
    var pendcaching     ="Ativar e especificar o tempo de expiração de cache";
    var pendimagens     ="Otimizar as imagens";
    var pendimagensdup  ="Evitar subir imagens repetidas no servidor";
    var pendsprites     ="Utilizar Sprites";
    var pendminicss     ="Minificar os arquivos de CSS";
    var pendminijs      ="Minificar os arquivos de JS";
    var pendminihtml    ="Minificar los archivos de html";
    var pendconteudovis ="Priorizar o conteúdo visível com o CSS Crítico (Critical CSS)";
    var pendlazyScripts ="Utilizar Lazy Scripts";
    var pendcdn         ="Utilizar CDN";


	var valifeitorenderjs = document.getElementById("renderjs");
	var valifeitorendercss = document.getElementById("rendercss");
	var valifeitoredirects = document.getElementById("redirects");
	var valifeitogzip = document.getElementById("gzip");
	var valifeitokeepAlive = document.getElementById("keepAlive");
	var valifeitopreconnect = document.getElementById("preconnect");
	var valifeitocaching = document.getElementById("caching");
	var valifeitoimagens = document.getElementById("imagens");
	var valifeitoimagensdup = document.getElementById("imagensdup");
	var valifeitosprites = document.getElementById("sprites");
	var valifeitominicss = document.getElementById("minicss");
	var valifeitominijs = document.getElementById("minijs");
	var valifeitominihtml = document.getElementById("minihtml");
	var valifeitoconteudovis = document.getElementById("conteudovis");
	var valifeitolazyScripts = document.getElementById("lazyScripts");
	var valifeitocdn = document.getElementById("cdn");

	var noHechorenderjs        = document.getElementById("pendrenderjs");
	var noHechorendercss       = document.getElementById("pendrendercss");
	var noHechoredirects       = document.getElementById("pendredirects");
	var noHechogzip            = document.getElementById("pendgzip");
	var noHechokeepAlive       = document.getElementById("pendkeepAlive");
	var noHechopreconnect      = document.getElementById("pendpreconnect");
	var noHechocaching         = document.getElementById("pendcaching");
	var noHechoimagens         = document.getElementById("pendimagens");
	var noHechoimagensdup      = document.getElementById("pendimagensdup");
	var noHechosprites         = document.getElementById("pendsprites");
	var noHechominicss         = document.getElementById("pendminicss");
	var noHechominijs          = document.getElementById("pendminijs");
	var noHechominihtml        = document.getElementById("pendminihtml");
	var noHechoconteudovis     = document.getElementById("pendconteudovis");
	var noHecholazyScripts     = document.getElementById("pendlazyScripts");
	var noHechocdn             = document.getElementById("pendcdn");

	var url = document.querySelector("#url").value;
	var nombreDesarrollador = document.getElementById("nombreDesarrollador").value;
	var correo = document.getElementById("correo").value;
	var correoAlguien = document.getElementById("correoAlguien").value;
	var telefono = document.getElementById("telefono").value;
	var fecha = document.getElementById("fecha").value;
	var horario = document.getElementById("horario").value;
	var tipo = document.getElementById("tipo").value;
	var mi = document.getElementById("mi").value;
	var mes = fecha.slice(5, 7);
	var dia = diaDeLaSemana(fecha, idioma);
	var date = mesEscrito(mes, idioma);
	var diaNum = fecha.slice(8);
	var fechaCompleta = (diaNum + " de " + date);
	var terminos = '<a href="https://docs.google.com/forms/d/e/1FAIpQLScbHb_eMyNJXEV3CkMBz8rlOfpe_fOOkauCsjWRA1XpZDOOZA/viewform">neste link</a>';
	if (url == "" || nombreDesarrollador == "" || correo == "" || telefono == "" || fecha == "" || horario == "" || tipo == "") {
		olvido = document.querySelector("#erro").classList.remove("esconder");
	}else{
		olvido = document.querySelector("#erro").classList.add("esconder");


		if (tipo == "primer") {

		mensaje.innerHTML = "<div class:'email_options'>Para: <input type='text' name='para' value='" + correo + "'><br>Com Cópia: <input type='text' name='cc' value='" + correoAlguien + "'><br>Assunto: <input type='text' name='asunto' value='Prepare-se para sua Sessão de Otimização de Site em Dispositivos Móveis - " + url + "'></div><div class='email_mensagem'><br><br>Mensagem: <br><br><div  id='mens' contenteditable='true'>Olá " + nombreDesarrollador + ",<br><br>Espero que tudo esteja bem! Meu nome é " + mi + ", sou especialista na otimização de velocidade em sites para dispositivos móveis do Google. Eu serei seu ponto de contato para nossa consultoria a respeito da página " + url + "<br><br>O horário para nossa consultoria foi agendado para <b>" + dia + " " + fechaCompleta + "</b> às <b>" + horario + "</b>. Eu irei ligar no número <b>" + telefono + "</b>. Melhorar a velocidade do site para dispositivos móveis é fundamental para o sucesso do seu negócio. Nós estamos animados em realizar esta parceria com você para tornar isto uma realidade!<br><br>Antes da nossa conversa, queira por favor:<br><ol><li>Revisar a apresentação em anexo que diz respeito às nossas expectativas a serem implantadas e o formulário de autorização, antes deste compromisso.<ul><li>Por favor forneça a autorização revisando os termos e condições disponíveis " + terminos + ".</li></ul></li><li><b>Por favor, confirme:</b>Um desenvolvedor web com acesso de administrador ao seu site (ex.: FTP ou credenciais de admin ao painel) estará na ligação?<ul><li>Nossa consultoria terá resultados limitados se não pudermos engajar alguém com conhecimento em desenvolvimento de websites. Do mesmo modo nós não conseguiremos implementar nada durante a primeira ligação caso o seu time não tenha acesso administrativo.</li></ul></li><li>Faça um backup do seu website antes.</li><li>Esteja no seu computador e preparado para o horário agendado.<ul><li>Provavelmente precisaremos iniciar uma sessão de compartilhamento de tela para revisarmos seu site juntos.</li></li></li></ol>Antes do nosso contato, iremos enviar um e-mail com nossa análise do seu website. Como esta será a base da nossa conversa, nós o encorajamos a dar uma olhada.</div></div>"

		}else if(tipo == "segundo") {

		mensaje.innerHTML = "<div class:'email_options'>Para: <input type='text' name='para' value='" + correo + "'><br>Con Copia: <input type='text' name='cc' value='" + correoAlguien + "'><br>Asunto: <input type='text' name='asunto' value='Consultoria de Otimização de Site para Dispositivos Móveis - " + url + "'><br><br><div  id='mens' contenteditable='true'>Olá " + nombreDesarrollador + ",<br><br>Espero que esteja tudo bem.<br><br> Meu nome é " + mi + ", especialista em otimização da velocidade de sites móveis do time do Google. Este e-mail é para confirmar seu agendamento marcado para " + dia + " " + fechaCompleta + " às " + horario +".<br><br>Na ligação, discutiremos questões que afetam a velocidade do seu site para dispositivos móveis e se possível fazer algumas rápidas mudanças. Como você sabe, os clientes estão cada vez mais usando dispositivos móveis para comprar produtos. Um site rápido significa mais clientes, mais vendas e maior rentabilidade para o seu negócio.<br><ul><li>Para obter o máximo do seu tempo, por favor, certifique-se que alguém tenha um login com todos os acessos necessários (cpanel,ssh,plesk).</li><li>Se você não estiver disponível para atender o compromisso, por favor, avise assim que possível informando um horário alternativo. Por último, estamos compartilhando antecipadamente o seu guia personalizado de consulta de velocidade de site móvel, um guia passo a passo com as oportunidades que você tem para otimizar o seu site. Espero que você tenha a oportunidade de analisá-lo com antecedência.</li></ul><br>Estou ansioso para falar com você.</div>"

		}else if(tipo == "terceiro") {
			mensaje.innerHTML="";
				tratados.length=0;
			if (valifeitorenderjs.checked)    {algoHecho = 1; adicionarTratados(tratados, feitorenderjs);}
		  if(valifeitorendercss.checked )   {algoHecho = 1; adicionarTratados(tratados, feitorendercss);}
			if(valifeitoredirects.checked)    {algoHecho = 1; adicionarTratados(tratados, feitoredirects);}
			if(valifeitogzip.checked)         {algoHecho = 1; adicionarTratados(tratados, feitogzip);}
			if(valifeitokeepAlive.checked)    {algoHecho = 1; adicionarTratados(tratados, feitokeepAlive);}
			if(valifeitopreconnect.checked)   {algoHecho = 1; adicionarTratados(tratados, feitopreconnect);}
			if(valifeitocaching.checked)      {algoHecho = 1; adicionarTratados(tratados, feitocaching);}
			if(valifeitoimagens.checked)      {algoHecho = 1; adicionarTratados(tratados, feitoimagens);}
			if(valifeitoimagensdup.checked)   {algoHecho = 1; adicionarTratados(tratados, feitoimagensdup);}
			if(valifeitosprites.checked)      {algoHecho = 1; adicionarTratados(tratados, feitosprites);}
			if(valifeitominicss.checked)      {algoHecho = 1; adicionarTratados(tratados, feitominicss);}
			if(valifeitominijs.checked)       {algoHecho = 1; adicionarTratados(tratados, feitominijs);}
			if(valifeitominihtml.checked)     {algoHecho = 1; adicionarTratados(tratados, feitominihtml);}
			if(valifeitoconteudovis.checked)  {algoHecho = 1; adicionarTratados(tratados, feitoconteudovis);}
			if(valifeitolazyScripts.checked)  {algoHecho = 1; adicionarTratados(tratados, feitolazyScripts);}
			if(valifeitocdn.checked)          {algoHecho = 1; adicionarTratados(tratados, feitocdn);}

			if(noHechorenderjs.checked)    {algoPendente = 1; adicionarTratados(pendentes, pendrenderjs);}
			if(noHechorendercss.checked)   {algoPendente = 1; adicionarTratados(pendentes, pendrendercss);}
			if(noHechoredirects.checked)   {algoPendente = 1; adicionarTratados(pendentes, pendredirects);}
			if(noHechogzip.checked)        {algoPendente = 1; adicionarTratados(pendentes, pendgzip);}
			if(noHechokeepAlive.checked)   {algoPendente = 1; adicionarTratados(pendentes, pendkeepAlive);}
			if(noHechopreconnect.checked)  {algoPendente = 1; adicionarTratados(pendentes, pendpreconnect);}
			if(noHechocaching.checked)     {algoPendente = 1; adicionarTratados(pendentes, pendcaching);}
			if(noHechoimagens.checked)     {algoPendente = 1; adicionarTratados(pendentes, pendimagens);}
			if(noHechoimagensdup.checked)  {algoPendente = 1; adicionarTratados(pendentes, pendimagensdup);}
			if(noHechosprites.checked)     {algoPendente = 1; adicionarTratados(pendentes, pendsprites);}
			if(noHechominicss.checked)     {algoPendente = 1; adicionarTratados(pendentes, pendminicss);}
			if(noHechominijs.checked)      {algoPendente = 1; adicionarTratados(pendentes, pendminijs);}
			if(noHechominihtml.checked)    {algoPendente = 1; adicionarTratados(pendentes, pendminihtml);}
			if(noHechoconteudovis.checked) {algoPendente = 1; adicionarTratados(pendentes, pendconteudovis);}
			if(noHecholazyScripts.checked) {algoPendente = 1; adicionarTratados(pendentes, pendlazyScripts);}
			if(noHechocdn.checked)         {algoPendente = 1; adicionarTratados(pendentes, pendcdn);}


				 var faltam ="";
				 var implementacoes = "";
				 if (algoPendente && !algoHecho) {
					 footer = faltaAlgo;
					 texto1 = corpo[2];
				 }else if (algoPendente && algoHecho){
					 footer = faltaAlgo;
					 texto1 = corpo[1];
				 }else {
					 footer = tudoFeito;
					 texto1 = corpo[0];
				 }
				 var tratativas = "";

			var i =0;
			while(i<tratados.length -1) {implementacoes+=tratados[i] + ", ";i++;};
			implementacoes+=tratados[i] + ".";

			var i=0;
			while(i<pendentes.length) {faltam+="<li>" + pendentes[i] + "</li>";i++};

			if (algoHecho) {
		 	tratativas = "Relembrando, nós abordamos as seguintes questões por telefone: " + implementacoes;
		 }

			mensaje.innerHTML="<div class:'email_options'>Para: <input type='text' name='para' value='" + correo + "'><br>Com Cópia: <input type='text' name='cc' value='" + correoAlguien + "'><br>Assunto: <input type='text' name='asunto' value='Resumo da nossa consulta - " + url + "'></div><div class='email_mensagem'><br><br>Mensagem: <br><br><div  id='mens' contenteditable='true'>Hola " + nombreDesarrollador + ",<br><br>Obrigado por atender a minha ligação hoje. Como eu mencionei, a velocidade de carregamento do site faz um enorme impacto na taxa de rejeição do seu site e na experiência geral do usuário móvel do seu site. <br><br>" + tratativas + texto1 + faltam + "</ul>" + footer + "<br>Saludos.</div>";


		}
	}
}/*fim do if portugues*/

}


function diaDeLaSemana(date, idioma) {
  var dayOfWeek = new Date(date).getDay();
  if (idioma == "ES") {
  return isNaN(dayOfWeek) ? null : ['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sabado', 'domingo'][dayOfWeek];
  }if (idioma == "PT-br" || idioma=="PT") {
  return isNaN(dayOfWeek) ? null : ['segunda-feira', 'terça-feira', 'quarta-feira', 'quinta-feira', 'sexta-feira', 'sabado', 'domingo'][dayOfWeek];
  }
  
}

function mesEscrito(date, idioma) {
	
  var dayOfWeek = new Date(date).getMonth();
  if (idioma == "ES") {
  return isNaN(dayOfWeek) ? null : ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'][dayOfWeek];
  }
  if (idioma == "PT-br" || idioma == "PT") {
  return isNaN(dayOfWeek) ? null : ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'][dayOfWeek];
  }
  
}

if (document.getElementById("generar") !== null) {
var evento = document.getElementById("generar").addEventListener("click", function(){
	generarCorreo();
});
}


function lele() {
var enteredText = document.getElementById("textArea").value;
var numberOfLineBreaks = (enteredText.match(/\n/g)||[]).length;
var characterCount = enteredText.length + numberOfLineBreaks;
//document.getElementById("lala").innerHTML = "Number of breaks:  " + numberOfLineBreaks + "<br><br>";
var pieces = enteredText.split("\n");
/*for (var n=0; n<pieces.length; n++) {
document.getElementById("lala").innerHTML += "[" + n + "] " + pieces[n] + "<br>";
}*/
document.getElementById("nombreDesarrollador").value = pieces[9];
document.getElementById("telefono").value = pieces[10];
document.getElementById("correo").value = pieces[11];
document.getElementById("correoAlguien").value = pieces[13];
document.getElementById("fecha").value = pieces[3];
document.getElementById("horario").value = pieces[5];
document.getElementById("site").value = pieces[1];
}
