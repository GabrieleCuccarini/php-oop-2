<?php

class Category {
  protected $tipologia;
  protected $icona;

  function __construct($_tipologia, $_icona = null) {
    $this->setTipologia($_tipologia);
    $this->setIcona($_icona);
  }

  public function getTipologia()
  {
    return $this->tipologia;
  }

  public function setTipologia($_tipologia)
  {
    $this->tipologia = $_tipologia;
    return $this;
  }

  public function getIcona()
  {
    return $this->icona;
  }

  public function setIcona($_icona)
  {
    $this->icona = $_icona;
    return $this;
  }
}
?>