<!-- 
STRUTTURA
            PRODUCT
        CATS      DOGS
    FOOD  GAMES  CUCCIA  CLEANERS
-->
<?php
class Product {
    protected string $nome;
    protected string $categoria;
    protected string $prezzo;
    protected string $dimensioni;
    protected string $materiali;
    protected string $valutazione;
    protected string $specie;
    protected $scontato;

    function __construct($_nome, $_categoria, $_prezzo, $_dimensioni, $_materiali, $_valutazione, $_specie, $_scontato) {
    $this->setNome($_nome);   
    $this->setCategoria($_categoria);   
    $this->setPrezzo($_prezzo);
    $this->setDimensioni($_dimensioni);
    $this->setMateriali($_materiali);
    $this->setValutazione($_valutazione);
    $this->setSpecie($_specie);
    $this->setScontato($_scontato);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($_nome)
    {
        $this->nome = $_nome;
        return $this;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($_categoria)
    {
        $this->categoria = $_categoria;
        return $this;
    }

    public function getPrezzo()
    {
        return $this->prezzo;
    }

    public function setPrezzo($_prezzo)
    {
        $this->prezzo = number_format($_prezzo, 2);;
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

    public function setValutazione($_valutazione)
    {
        $this->valutazione = number_format($_valutazione, 1);
        return $this;
    }

    public function getSpecie()
    {
        return $this->specie;
    }

    public function setSpecie($_specie)
    {
        $this->specie = $_specie;
        return $this;
    }

    public function getScontato()
    {
        return $this->scontato ? ($this->scontato . "% di sconto") : 'Intero';
    }

    public function setScontato($_scontato)
    {
        $this->scontato = $_scontato;
        return $this;
    }
}
?>