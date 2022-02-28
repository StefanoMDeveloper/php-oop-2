<?php

class Spettacoli{

    private $durata;
    private $data;
    private $film;
    private $sala;

    public function __construct($_durata,$_data,$_film,$_sala){
        $this->durata = $_durata;
        $this->data = $_data;
        $this->film = $_film;
        $this->sala = $_sala;
    }

}

?>