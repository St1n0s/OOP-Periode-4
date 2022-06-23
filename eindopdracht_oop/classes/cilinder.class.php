<?php

include_once("figuur.class.php");

class Cilinder extends figuur {
    public function __construct($x, $y) {
        parent::__construct($x, $y);
    }

    public function getH() {
        return $this->y;
    }

    public function getR() {
        return $this->x;
    }

    public function berekenOppervlakte() {
        $uitkomst = (2 * $this->PI * $this->x * $this->x) + (2 * $this->PI * $this->x * $this->y);
        return $uitkomst;
    }
}

?>