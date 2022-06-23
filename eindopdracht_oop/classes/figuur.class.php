<?php
    abstract class figuur {
        public $PI = 3.145;
        protected $x;
        protected $y;
        private $omschrijving;

        public function __construct($lx, $ly){
            $this->setX($lx);
            $this->setY($ly);
        }

        public function setX($lx){
            $this->x = $lx;
        }
        
        public function setY($ly){
            $this->y = $ly;
        }

        public function setOmschrijving($lomschrijving){

        }

        public function getOmschrijving(){

        }

        public abstract function berekenOppervlakte();
    }

?>