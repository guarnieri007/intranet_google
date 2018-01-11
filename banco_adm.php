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

function buscarPaises($conexao) {
  $paises = array();
  $query = "SELECT * FROM paises";
  $resultado = mysqli_query($conexao, $query);
  while($pais = mysqli_fetch_assoc($resultado)) {
    array_push($paises, $pais);
  }
  return $paises;
}

function adicionarPais($conexao, $pais, $abreviacao) {
  $pais = mysqli_real_escape_string($conexao, $pais);
  $abreviacao = mysqli_real_escape_string($conexao, $abreviacao);
  $query = "INSERT into paises (pais, abreviacao) values ('{$pais}', '{$abreviacao}')";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;
}

function editarPais($conexao, $pais, $abreviacao, $id_pais) {
  $abreviacao = mysqli_real_escape_string($conexao, $abreviacao);
  $pais = mysqli_real_escape_string($conexao, $pais);
  $query = "UPDATE paises set abreviacao = '{$abreviacao}', pais = '{$pais}' WHERE id_pais = '{$id_pais}'";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;
}

function removerPais($conexao, $id_pais) {
  $query = "DELETE FROM paises WHERE id_pais = '{$id_pais}'";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;
}

function adicionarIdiomas($conexao, $idioma, $abreviacao) {
  $idioma = mysqli_real_escape_string($conexao, $idioma);
  $abreviacao = mysqli_real_escape_string($conexao, $abreviacao);
  $query = "INSERT into idioma (idioma, abreviacao) values ('{$idioma}', '{$abreviacao}')";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;
}

function editaIdiomas($conexao, $idioma, $abreviacao, $pais, $id_idioma) {
  $idioma = mysqli_real_escape_string($conexao, $idioma);
  $abreviacao = mysqli_real_escape_string($conexao, $abreviacao);
  $query = "UPDATE idioma set idioma = '{$idioma}', abreviacao = '{$abreviacao}' WHERE id_idioma = '{$id_idioma}'";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;
}

function removerIdioma($conexao, $id_idioma) {
  $query = "DELETE FROM idioma WHERE id_idioma = '{$id_idioma}'";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;
}

function updateDatabase($conexao, $update) {
  $resultado = mysqli_query($conexao, $update);
  return $resultado;
}
