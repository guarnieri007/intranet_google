/*verifica se existe a variavel da janela de popup e se sim abilita o escutador da função de fechar essa janela*/
/* começa aqui a verificação */
var janelaAviso = document.querySelector(".aviso");
function fecharMenu() {
  var janelaAviso = document.querySelector(".aviso").style.display = "none";
  console.log("entrou");
}
if (janelaAviso) {
  janelaAviso.addEventListener("click", function(){
  	fecharMenu();
  });
}
/* termina aqui a verificação */
var addButtonIdioma = document.getElementById('add');
function adicionarIdioma() {
/*
  var formulario = document.getElementById('action');
  var addButtonIdioma = document.getElementById('add');
  addButtonIdioma.classList.add("esconder");
  var linhaTD = document.createElement("td");
  var linhaInput = document.createElement("input");
  linhaInput.setAttribute("type", "text");
  linhaInput.setAttribute("name", "idioma");
  linhaTD.appendChild(linhaInput);
  formulario.appendChild(linhaTD);

  var linhaTD = document.createElement("td");
  var linhaInput = document.createElement("input");
  linhaInput.setAttribute("type", "text");
  linhaInput.setAttribute("name", "abreviacao");
  linhaTD.appendChild(linhaInput);
  formulario.appendChild(linhaTD);

  var linhaTD = document.createElement("td");
  var linhaInput = document.createElement("input");
  linhaInput.setAttribute("type", "text");
  linhaInput.setAttribute("name", "pais");
  linhaTD.appendChild(linhaInput);
  formulario.appendChild(linhaTD);

  var linhaTD = document.createElement("td");
  var linhaInput = document.createElement("input");
  linhaInput.setAttribute("type", "submit");
  linhaInput.setAttribute("value", "Salvar");
  linhaTD.appendChild(linhaInput);
  formulario.appendChild(linhaTD);
  */
  var formulario = document.getElementById("action").classList.remove("esconder");
  var addButtonIdioma = document.getElementById('add');
  addButtonIdioma.classList.add("esconder");

}
if(addButtonIdioma) {
  addButtonIdioma.addEventListener("click", function(){
    adicionarIdioma();
  });
}
/* começa aqui a verificação da pagina php*/
