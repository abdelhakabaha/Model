<?php
class Scheduale{
    private $date;
    private $departureTime;
    private $arrivalTime;
    private $availableSeats;
    private $price;

    public function __construct($date,$departureTime, $arrivalTime, $availableSeats, $price){
        $this->departureTime = $departureTime;
        $this->arrivalTime = $arrivalTime;
        $this->availableSeats = $availableSeats;
        $this->price = $price;
    }
    public function getDate(){
        return $this->date;
    }
    public function getDepartureTime(){
        return $this->departureTime;
    }
    public function getArrivalTime(){
        return $this->arrivalTime;
    }
    public function getAvailableSeats(){
        return $this->availableSeats;
    }
    public function getPrice(){
        return $this->price;
    }
  
}