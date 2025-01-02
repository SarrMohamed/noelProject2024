<?php

class ClientModel{   
    private $table = 'client';
    private $connexion;

    function __construct($connexion){
            $this->connexion = $connexion;
    }

    function addClient($nom,$prenom,$email, $telephone){
        $sql ="INSERT INTO $this->table (nom,prenom,email,telephone) values
        (?,?,?,?)";
        $sth = $this->connexion->prepare($sql);
        $sth->execute([$nom,$prenom,$email, $telephone]);
    }

    function getAllClients(){
        $sql ="SELECT * FROM $this->table";
        return $this->connexion->query($sql)->fetchAll();
    }

    //La fonction de recuperation d'un etudiant via L'ID
    function getClientById($id){
        $sql ="SELECT * FROM $this->table WHERE id = $id";
        $sth = $this->connexion->prepare($sql);
        $sth->execute([$id]);
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    function deleteClient($id){
        $sql ="DELETE FROM $this->table WHERE id = ?";
        $sth = $this->connexion->prepare($sql);
        $sth->execute([$id]);
    }

    function updateClient($id,$nom,$prenom,$email, $telephone){
        global $connexion;
        global $table;
        $sql ="UPDATE $table set nom='$nom',prenom='$prenom',email='$email', telephone='$telephone' WHERE
        where id = $id";
        return pg_query($connexion,$sql);
    }
}

?>