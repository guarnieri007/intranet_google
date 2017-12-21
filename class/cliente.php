<?php
  include_once("cabecalho.php");

  class Cliente {
    private $webmaster_nome;
    private $webmaster_email;
    private $webmaster_telefone;
    private $site;
    private $sales_rep_email;
    private $agendamento;
    private $horario_agen;
    private $mercado;
    private $operador;
    private $cliente_id;

    function __construct($webmaster_nome, $webmaster_email, $webmaster_telefone, $site, $agendamento, $horario_agen, $mercado, $operador) {
      $this->webmaster_nome = $webmaster_nome;
      $this->webmaster_email = $webmaster_email;
      $this->webmaster_telefone = $webmaster_telefone;
      $this->site = $site;
      $this->agendamento = $agendamento;
      $this->horario_agen = $horario_agen;
      $this->mercado = $mercado;
      $this->operador = $operador;
    }
    function setCliente_Id($cliente_id) {
      $this->cliente_id = $cliente_id;
    }

    function setSales_Rep_Email($sales_rep_email) {
      $this->sales_rep_email = $sales_rep_email;
    }

    function setWebmaster_Nome($webmaster_nome) {
      $this->webmaster_nome = $webmaster_nome;
    }
    function setWebmaster_Email($webmaster_email) {
      $this->webmaster_email = $webmaster_email;
    }

    function setWebmaster_Telefone($webmaster_telefone) {
      $this->webmaster_telefone = $webmaster_telefone;
    }

    function setSite($site) {
      $this->site = $site;
    }

    function setAgendamento($agendamento) {
      $this->agendamento = $agendamento;
    }

    function setHorario_Agen($horario_agen) {
      $this->horario_agen = $horario_agen;
    }

    function setMercado($mercado) {
      $this->mercado = $mercado;
    }

    function setOperador($operador) {
      $this->operador = $operador;
    }

    function getWebmaster_Nome() {
      return $this->webmaster_nome;
    }
    function getWebmaster_Telefone() {
      return $this->webmaster_telefone;
    }
    function getWebmaster_Email() {
      return $this->webmaster_email;
    }
    function getSite() {
      return $this->site;
    }
    function getSales_Rep_Email() {
      return $this->sales_rep_email;
    }
    function getAgendamento() {
      return $this->agendamento;
    }
    function getHorario_Agen() {
      return $this->horario_agen;
    }
    function getMercado() {
      return $this->mercado;
    }
    function getOperador() {
      return $this->operador;
    }
    function getCliente_Id() {
      return $this->cliente_id;
    }

  }


?>
