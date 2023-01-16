<?php
require_once __DIR__ . "/Product.php";

class Cat extends Product {
  protected string $specie = 'Gatto';

  function __construct($_nome, $_magazzino, $_prezzo, $_dimensioni, $_materiali, $_valutazione, $_specie,$_scontato) {
    parent::__construct($_nome, $_magazzino, $_prezzo, $_dimensioni, $_materiali, $_valutazione, $this->specie,$_scontato);
  }

}