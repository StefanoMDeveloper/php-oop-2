<?php
    require_once __DIR__. "/Sala.php";
    class Sala_4d extends Sala{

        public $effetti;
    
        public function __construct($_nome,$_capienza,$_schermo,$_effetti){
            parent::__construct($_nome,$_capienza,$_schermo);
            $this->effects = $_effetti;
        }

        public function getInfo()
        {
            return "{$this->nome} [{$this->capienza} / {count{$this->effetti}}]";
        }
    
    }

?>