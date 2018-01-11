
function voltarDias(dias, arquivo, acao) {
  var data = new Date();
  if (acao == "-"){
  data.setDate((data.getDate() - dias));
  }
  if (acao == "+") {
    data.setDate((data.getDate() + dias));
  }
  var dia = data.getDate();
  if (dia == 0) {
    dia = dia - 1;
  }
  if (dia < 10) {
    dia = "0" + dia;
  }
  var mes = data.getMonth();
  mes = mes + 1;
  if (mes < 10) {
    mes = "0" + mes;
  }
  if (mes == 0) {
    mes = mes - 1;
  }
  var ano = data.getFullYear();
  var hoje = ano + "-" + mes + "-" + dia;
  if(arquivo == "nenhum"){
    console.log(hoje);
    return hoje;
}else{
  document.getElementById(arquivo).value = hoje;
}

}
