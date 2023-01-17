<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";

class Dog extends Product {
  protected string $specie;
  protected $spray;

  function __construct($_nome, $_magazzino, Category $_categoria, $_prezzo, $_valutazione, $_scontato, $_specie, $_spray = null) {
    parent::__construct($_nome, $_magazzino, $_categoria, $_prezzo, $_valutazione, $_scontato);

    $this->setSpecie($_specie);
    $this->setSpray($_spray);
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

  public function getSpray()
  {
    return $this->spray;
  }

  public function setSpray($_spray)
  {
    $this->spray = $_spray;
    return $this;
  }
}