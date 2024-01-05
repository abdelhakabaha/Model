<?php
class Reservation{
    private $reservation;
    private $seigeNumber;
    private $reservationDate;

    public function __construct($reservation, $seigeNumber, $reservationDate){
        $this->reservation = $reservation;
        $this->seigeNumber = $seigeNumber;
        $this->reservationDate = $reservationDate;
    }
    public function getReservation(){
        return $this->reservation;
    }
    public function getSeigeNumber(){
        return $this->seigeNumber;
    }
    public function getReservationDate(){
        return $this->reservationDate;
    }
}