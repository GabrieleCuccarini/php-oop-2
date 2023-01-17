<!-- 
                    STRUTTURA
        PRODUCT  ------------.>         TIPOLOGIA
    CATS      DOGS          FOOD  GAMES  CLEAN GENERIC
    
-->
<?php
require_once __DIR__ . "/Category.php";

class Product {
    protected string $nome;
    protected int $magazzino;
    protected $categoria;
    protected float $prezzo;
    protected float $valutazione;
    protected $scontato;

    function __construct($_nome, $_magazzino, Category $_categoria, $_prezzo, $_valutazione, $_scontato) {
    $this->setNome($_nome);   
    $this->setMagazzino($_magazzino);  
    $this->setCategoria($_categoria);  
    $this->setPrezzo($_prezzo);
    $this->setValutazione($_valutazione);
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

    public function getMagazzino()
    {
        return $this->magazzino;
    }

    public function setMagazzino($_magazzino)
    {
        $this->magazzino = $_magazzino;
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
        return number_format($this->prezzo, 2);
    }

    public function setPrezzo($_prezzo)
    {
        $this->prezzo = number_format($_prezzo, 2);
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

    public function getScontato()
    {
        if ($this->scontato === 15) {
            return number_format(($this->prezzo) * 85 / 100, 2) . "€ (15%)";
        } else if ($this->scontato === 30) {
            return number_format(($this->prezzo) * 70 / 100, 2). "€ (30%)";
        } else {
            return "No";
        }
    }

    public function setScontato($_scontato)
    {
        $this->scontato = $_scontato;
        return $this;
    }


}
?>
