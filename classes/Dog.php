<?php
require_once __DIR__ . "/Product.php";

class Dog extends Product {
  protected string $categoria = "Prodotto per cani";
  protected string $specie = 'Cane';

  function __construct($_nome, $_categoria, $_prezzo, $_dimensioni, $_materiali, $_valutazione, $_specie) {
    parent::__construct($_nome,$this->categoria, $_prezzo, $_dimensioni, $_materiali, $_valutazione, $this->specie);
  }

}