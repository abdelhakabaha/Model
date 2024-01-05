<?php
require_once 'connexion.php';
require_once 'Book.php';
class BusDAO{
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection(); 
    }

    public function get_bus(){
        $query = "SELECT * FROM Bus";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $BusData = $stmt->fetchAll();
        $tab_Bus = array();
        foreach ($BusData as $B) {
            $tab_bus[] = new Bus($B["busNumber"],$B["licensePlate"],$B["capacity"]);
        }
        return $tab_Bus;
    }
    public function add_bus($car){
         

    }

}

?>
