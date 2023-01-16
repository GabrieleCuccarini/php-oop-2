<!-- 
STRUTTURA
            PRODUCT
        CATS      DOGS
    FOOD  GAMES  CUCCIA  CLEANERS
-->
<?php
class Product {
    protected string $prezzo;
    protected $dimensioni;
    protected $materiali;
    protected $valutazione;

    function __construct($_prezzo, $_dimensioni, $_materiali, $_valutazione) {
    $this->setPrezzo($_prezzo);
    $this->setDimensioni($_dimensioni);
    $this->setMateriali($_materiali);
    $this->setValutazione($_valutazione);
    }

    public function getPrezzo()
    {
        return $this->prezzo;
    }

    public function setPrezzo($_prezzo)
    {
        $this->prezzo = $_prezzo;
        return $this;
    }

    public function getDimensioni()
    {
        return $this->dimensioni;
    }

    public function setDimensioni($_dimensioni)
    {
        $this->dimensioni = $_dimensioni;

        return $this;
    }

    public function getMateriali()
    {
        return $this->materiali;
    }

    public function setMateriali($_materiali)
    {
        $this->materiali = $_materiali;

        return $this;
    }

    public function getValutazione()
    {
        return $this->valutazione;
    }

    /**
     * Set the value of valutazione
     *
     * @return  self
     */ 
    public function setValutazione($_valutazione)
    {
        $this->valutazione = $_valutazione;

        return $this;
    }
}
?>