<?php
class Company{
    private $image;
    private $companyame;
    public function __construct($image, $companyame){
        $this->image = $image;
        $this->companyame = $companyame;
    }
    public function get_image(){
        return $this->image;
    }
    public function get_companyame(){
        return $this->companyame;
    }
}