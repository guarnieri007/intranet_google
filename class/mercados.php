<?php
  include_once("cabecalho.php");

  /**
   * Mercados
   */
  class Mercado
  {
    private $nome;
    private $id;
    function __construct($nome)
    {
      $this->nome = $nome;
    }
    function getNome() {
      return $this->nome;
    }
  }




  ?>
