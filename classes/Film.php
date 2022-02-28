<?php

class Film{
    private $titolo;
    private $lingua;
    private $generi;
    private $cast;
    private $direttore;

    public function __construct($_titolo,$_lingua,$_generi,$_cast,$_direttore)
    {
        $this->titolo = $_titolo;
        $this->lingua = $_lingua;
        $this->generi = $_generi;
        $this->cast = $_cast;
        $this->direttore = $_direttore;
    }

}

?>