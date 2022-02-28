<?php

    class Sala_4d extends Sala{

        private $effetti;
    
        public function __construct($_nome,$_nPosti,$_schermo,$_effetti){
            parent::__construct($_nome,$_nPosti,$_schermo);
            $this->effects = $_effetti;
        }
    
    }

?>