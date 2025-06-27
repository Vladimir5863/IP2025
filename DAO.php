<?php
request_once 'db.php';

class DAO{

    private $SELECTOSOBE = "SELECT * FROM osobe";
    private $INSERTOSOBA = "INSERT INTO osobe (ime, prezime, godiste) VALUES (?, ?, ?)";
    private $DELETEOSOBA = "DELETE FROM osobe WHERE id = ?";
    private $SELECTBYID = "SELECT * FROM osobe WHERE id = ?";
    private $UPDATEBYID = "UPDATE osobe SET ime = ?, prezime = ?, godiste = ? WHERE id = ?";

    public function getAllOsobe() {
        $this->db = DB::createInstance();
    }

    public function selectOsobe(){
        $statment = $this->db->prepare($this -> SELECTOSOBE);
        $statment->execute();
        $result = $statment->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function insertOsoba($osoba){
        $statment = $this->db->prepare($this -> INSERTOSOBA);
        $statment->bindValue(1, $osoba->ime);
        $statment->bindValue(2, $osoba->prezime);
        $statment->bindValue(3, $osoba->godiste);
        $statment->execute();
    }

     public function deleteOsoba($idosoba){
        $statment = $this->db->prepare($this -> INSERTOSOBA);
        $statment->bindValue(1, $idosoba);
        $statment->execute();
    }

    public function getById($idOsobe){
        $statment = $this->db->prepare($this -> SELECTBYID);
        $statment->bindValue(1, $idOsobe->id);
        $statment->execute();
        $result = $statment->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function updateById($osoba){
        $statment = $this->db->prepare($this -> UPDATEBYID);
        $statment->bindValue(1, $osoba->ime);
        $statment->bindValue(2, $osoba->prezime);
        $statment->bindValue(3, $osoba->godiste);
        $statment->bindValue(4, $osoba->id);
        $statment->execute();
    }

}
?>