<?php
class Points{
    private $points ;
    public function __construct($points) {
        $this->points = $points;
    }
    public function getPoints() {
        return $this->points;
    }
}
