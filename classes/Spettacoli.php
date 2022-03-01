<?php

class Spettacoli{

    private $ora;
    private $data;
    private $film;
    private $sala;

    public function __construct($_data,$_ora,$_film,$_sala){
        $this->data = $_data;
        $this->ora = $_ora;
        $this->film = $_film;
        $this->sala = $_sala;
    }

}

?>