<?php include_once("conexao.php");

function buscaIdiomas($conexao) {
  $idiomas = array();
  $query = "SELECT * FROM idioma";
  $resultado = mysqli_query($conexao, $query);
  while($idioma = mysqli_fetch_assoc($resultado)) {
    array_push($idiomas, $idioma);
  }
  return $idiomas;
}

function adicionarIdiomas($conexao, $idioma, $abreviacao, $pais) {
  $idioma = mysqli_real_escape_string($conexao, $idioma);
  $abreviacao = mysqli_real_escape_string($conexao, $abreviacao);
  $pais = mysqli_real_escape_string($conexao, $pais);
  $query = "INSERT into idioma (idioma, abreviacao, pais) values ('{$idioma}', '{$abreviacao}', '{$pais}')";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;
}

function editaIdiomas($conexao, $idioma, $abreviacao, $pais, $id_idioma) {
  $idioma = mysqli_real_escape_string($conexao, $idioma);
  $abreviacao = mysqli_real_escape_string($conexao, $abreviacao);
  $pais = mysqli_real_escape_string($conexao, $pais);
  $query = "UPDATE idioma set idioma = '{$idioma}', abreviacao = '{$abreviacao}', pais = '{$pais}' WHERE id_idioma = '{$id_idioma}'";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;
}

function removerIdioma($conexao, $id_idioma) {
  $query = "DELETE FROM idioma WHERE id_idioma = '{$id_idioma}'";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;
}
