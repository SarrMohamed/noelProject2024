<?php

class RendezVousModel{   
    private $table = 'rendez_vous';
    private $connexion;

    function __construct($connexion){
            $this->connexion = $connexion;
    }

    function addRendezVous($date,$description, $client_id,$heure){
        $sql ="INSERT INTO $this->table (date,description,client_id ,heure) values
        (?,?,?,?)";
        $sth = $this->connexion->prepare($sql);
        $sth->execute([$date,$description, $client_id,$heure]);
    }

    function getAllRendezVous(){
        $sql ="SELECT * FROM $this->table";
        return $this->connexion->query($sql)->fetchAll();
    }

    //La fonction de recuperation d'un rv via L'ID
    function getRendezVousById($id){
       
        $sql ="SELECT * FROM $this->table WHERE id = ?";
        $sth = $this->connexion->prepare($sql);
        return $this->connexion->query($sql)->fetchAll([$id]);
    }
    function deleteRendezVous($id){
        $sql ="DELETE FROM $this->table WHERE id = ?";
        $sth = $this->connexion->prepare($sql);
        $sth->execute([$id]);
    }

    function updateRendezVous($id,$date,$description, $client_id,$heure){
        global $connexion;
        global $table;
        $sql ="UPDATE $table set date=$date,description='$description', client_id=$client_id ,heure=$heure WHERE
        where id = $id";
        return pg_query($connexion,$sql);
    }
}

?>