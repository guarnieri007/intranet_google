<?php
  include_once("cabecalho.php");
  include_once("mercados.php");

  class usuario {

    private $nome;
    private $senha;
    private $email;
    private $apelido;
    private $idiomas;
    private $pais;

    function getNome() {
      return $this->nome;
    }
    function getEmail() {
      return $this->email;
    }
    function getApelido() {
      return $this->apelido;
    }
    function getIdiomas() {
      return $this->idiomas;
    }
    function getPais() {
      return $this->pais;
    }
  }

?>
