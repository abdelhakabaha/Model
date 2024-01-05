<?php
class Read{
    private $id ;
    private $distance;
    private $duration;

    public function __construct($id,$distance,$duration){
        $this->id = $id;
        $this->distance = $distance;
        $this->duration = $duration;
    }
    public function getId(){
        return $this->id;
    }
    public function getDistance(){
        return $this->distance;
    }
    public function getDuration(){
        return $this->duration;
    }

}