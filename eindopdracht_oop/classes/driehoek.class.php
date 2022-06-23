<?php

include_once("figuur.class.php");

class Driehoek extends figuur {
    public function __construct($x, $y) {
        parent::__construct($x, $y);
    }

    public function getX() {
        return $this->x;
    }

    public function berekenOppervlakte() {
        $uitkomst = ($this->x * $this->y) / 2;
        return $uitkomst;
    }
}

?>