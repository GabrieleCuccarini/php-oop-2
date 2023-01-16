<?php
require_once __DIR__ . "/Product.php";

class Dog extends Product {
  protected string $specie = 'Cane';
  protected $test;

  function __construct($_nome, $_magazzino, $_prezzo, $_dimensioni, $_materiali, $_valutazione, $_specie,$_scontato, $test) {
    parent::__construct($_nome, $_magazzino, $_prezzo, $_dimensioni, $_materiali, $_valutazione, $this->specie,$_scontato);
  }

  public function getTest()
  {
    return $this->test;
  }

  public function setTest($test)
  {
    $this->test = $test;

    return $this;
  }
}