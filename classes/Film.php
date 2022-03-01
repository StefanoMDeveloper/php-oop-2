<?php

class Film{
    private $titolo;
    private $durata;
    private $genere;
    private $attori;

    public function __construct($_titolo,$_durata,$_genere,$_attori = [])
    {
        $this->titolo = $_titolo;
        $this->durata = $_durata;
        $this->genere = $_genere;
        $this->attori = $_attori;

    }


    public function addAttore($_attore){
        $this->attori[] = $_attore;
    }

    public function setAttori($_attori){
        $this->attori = $_attori;
    }

    public function setTitolo($_titolo){
        if(is_int($_titolo)){
            throw new Exception("inserisci un testo grazie");
        }
        $this->titolo = $_titolo;
    }
}

?>