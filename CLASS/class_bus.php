<?php
class Bus {
    private $busNumber;
    private $licensePlate;
    private $capacity;
    function __construct($busNumber, $licensePlate, $capacity) {
        $this->busNumber = $busNumber;  
        $this->licensePlate = $licensePlate;
        $this->capacity = $capacity;
    }
    public function getbusNumber() {
        return $this->busNumber;
    }
    public function getLicensePlate() {
        return $this->licensePlate;
    }
    public function getCapacity() {
        return $this->capacity;
    }
}
