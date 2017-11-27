<?php
  include_once("cabecalho.php");
  include_once("mercados.php");

  class pais
  {
    private $nome;
    private $abreviacao;
    private $mercado;
    function __construct($nome, $abreviacao, $mercado)
    {
      $this->nome = $nome;
      $this->abreviacao = $abreviacao
      $this->mercado = $mercado->id;
    }
    function getNome() {
      return $this->nome;
    }
    function getAbreviacao() {
      return $this->abreviacao;
    }
    function getMercado(){
      return $this->mercado;
    }
    functioin __tostring() {
      echo "Country: ".$this->nome."-".$this->abreviacao." Market: ".$this->mercado;
    }
  }


?>
