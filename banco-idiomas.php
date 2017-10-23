<?php require_once("conexao.php");
function listaIdiomas($conexao){
  $idiomas = array();
  $query = "select * from idioma";
  $resultado = mysqli_query($conexao, $query);
  while ($idioma = mysqli_fetch_assoc($resultado)) {
    array_push($idiomas, $idioma);
  }
  return $idiomas;
}


function adicionaCategoria($conexao, $novoIdioma, $abreviacao)
{
  $novoIdioma = mysqli_real_escape_string($conexao, $novoIdioma);
  $abreviacao = mysqli_real_escape_string($conexao, $abreviacao);
  $query = "insert into idioma (idioma, abreviacao) value ('{$novaCategoria}', '{$abreviacao}')";
  return mysqli_query($conexao, $query);
}
