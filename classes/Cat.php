<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";

class Cat extends Product {
  protected string $specie;

  function __construct($_nome, $_magazzino, Category $_categoria,$_immagine, $_prezzo, $_valutazione, $_scontato, $_specie) {
    parent::__construct($_nome, $_magazzino, $_categoria, $_immagine, $_prezzo, $_valutazione, $_scontato);

    $this->setSpecie($_specie);
  }

  public function getSpecie()
  {
    if ($this->specie === "Gatto") {
      return '<i class="fa-solid fa-cat"></i>';
    } else if ($this->specie === "Cane") {
      return '<i class="fa-solid fa-dog"></i>';
    }
  }

  public function setSpecie($_specie)
  {
    $this->specie = $_specie;
    return $this;
  }
}