
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
    var feitogzip ="Ativar la compresión con Gzip";
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

	var pendrenderjs    ="Evitar el bloqueo de JavaScript en la parte de arriba";
	var pendrendercss   ="Evitar el bloqueo de CSS en la parte de arriba";
	var pendredirects   ="Quitar redirecionamento";
    var pendgzip        ="Ativar la compressión con Gzip";
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
	var dia = diaDeLaSemana(fecha);
	var diaNum = fecha.slice(8);
	var date = mesEscrito(fecha);
	var fechaCompleta = (diaNum + " de " + date);
	var terminos = '<a href="https://docs.google.com/forms/d/e/1FAIpQLScbHb_eMyNJXEV3CkMBz8rlOfpe_fOOkauCsjWRA1XpZDOOZA/viewform">este enlace</a>';
	if (url == "" || nombreDesarrollador == "" || correo == "" || telefono == "" || fecha == "" || horario == "" || tipo == "") {
		olvido = document.querySelector("#erro").classList.remove("esconder");
	}else{
		olvido = document.querySelector("#erro").classList.add("esconder");


		if (tipo == "primer") {

		mensaje.innerHTML = "<div class:'email_options'>Para: <input type='text' name='para' value='" + correo + "'><br>Con Copia: <input type='text' name='cc' value='" + correoAlguien + "'><br>Asunto: <input type='text' name='asunto' value='Prepárese para su consulta de Velocidad en Sitios Móviles - " + url + "'></div><div class='email_mensagem'><br><br>Mensaje: <br><br><div  id='mens' contenteditable='true'>Hola " + nombreDesarrollador + ",<br><br>¡Espero que esté muy bién! Mi nombre es " + mi + " y soy especialista en la optimización de velocidad en sitios móviles en Google. Yo seré su punto de contacto para nuestra consulta del sitio " + url + "<br><br>Se ha establecido una reunión para nuestra consulta el próximo " + dia + " " + fechaCompleta + " a las " + horario + ". Y llamaré al teléfono " + telefono + ". Mejorar la velocidad de los sitios móviles es esencial para un negocio exitoso. ¡Estamos muy emocionados por trabajar contigo y hacer de esto una realidad!<br><br>Antes de nuestra llamada, por favor:<br><ol><li>Repase la presentación adjunta respecto nuestras expectativas de implementación y el formulario de consentimiento antes de la reunión<ul><li>Por favor provea de antemano el consentimiento de que ha revisado los términos y condiciones en " + terminos + ".</li></ul></li><li>Por favor confirme: ¿Estará presente un desarrollador web con derechos de administrador para su sitio (e.g FTP o un panel con derechos de administrador) en la llamada?<ul><li>Nuestra consulta tendrá resultados limitados si no tenemos contacto directo con un desarrollador. Tenga en cuenta que no podremos realizar ninguna implementación en la primer llamada si su equipo no tiene derechos administrativos.</li></ul></li><li>Haga una copia de seguridad de su sitio antes de la llamada.</li><li>Esté presente con su computadora listo para la reunión<ul><li>Probablemente necesitaremos hacer una sesión de pantalla compartida para revisar su sitio juntos.</li></li></li></ol>Antes de nuestra llamada también le enviaremos un email de seguimiento con el análisis realizado de su sitio. Esto va ser la base de nuestra llamada, así que lo invitamos a revisarlo.</div></div>"

		}else if(tipo == "segundo") {

		mensaje.innerHTML = "<div class:'email_options'>Para: <input type='text' name='para' value='" + correo + "'><br>Con Copia: <input type='text' name='cc' value='" + correoAlguien + "'><br>Asunto: <input type='text' name='asunto' value='Tu Consulta de velocidad para sitios móviles - " + url + "'><br><br><div  id='mens' contenteditable='true'>Hola " + nombreDesarrollador + ",<br><br>¡Espero que esté muy bien!<br><br>Soy " + mi + " especialista del equipo de optimización para sitios móviles de Google. Este correo es para confirmar su reunión programada para el próximo " + dia + " " + fechaCompleta + " a las " + horario +".<br><br>En la llamada, vamos a hablar acerca de problemas que afectan la velocidad de su sitio para dispositivos móviles y, si posible, completar algunas soluciones rápidas. Cómo ya sabrá, los clientes están utilizando cada vez más sus teléfonos para comprar productos. Un sitio rápido significa más clientes, más compras y más ganancias para su negocio.<br><ul><li>Para aprovechar mejor su tiempo, por favor asegúrese de que alguien tenga todas las credenciales de acceso necesarias (cpanel, ssh, plex).</li><li>Si por alguna razón ya no puede atender la llamada programada, por favor avísenos tan pronto como sea posible, dando otro horario en el cual esté disponible para la llamada. Por último, estamos compartiendo un archivo con la información personalizada Consulta de Velocidad para sitios Móviles, una guía paso a paso de las oportunidades a mejorar en su sitio para determinados puntos. Espero que tenga oportunidad de revisarlo.</li></ul><br>Quedo al pendiente.</div>"

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

			mensaje.innerHTML="<div class:'email_options'>Para: <input type='text' name='para' value='" + correo + "'><br>Con Copia: <input type='text' name='cc' value='" + correoAlguien + "'><br>Asunto: <input type='text' name='asunto' value='Resumen de nuestra consulta - " + url + "'></div><div class='email_mensagem'><br><br>Mensaje: <br><br><div  id='mens' contenteditable='true'>Hola " + nombreDesarrollador + "<br><br>Gracias por contestar mi llamada hoy. Cómo he mencionado, la velocidad de carga de un sitio web tiene un enorme impacto en la tasa del 'website bounce' y en la experiencia general del usuario en su sitio. <br><br>" + tratativas + texto1 + faltam + "</ul>" + footer + "<br>Saludos.</div>";


		}
	}
}



function diaDeLaSemana(date) {
  var dayOfWeek = new Date(date).getDay();
  return isNaN(dayOfWeek) ? null : ['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sabado', 'domingo'][dayOfWeek];
}

function mesEscrito(date) {
  var dayOfWeek = new Date(date).getMonth();
  return isNaN(dayOfWeek) ? null : ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'][dayOfWeek];
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
