<?php

    $table = 'etudiant';


    //La methode d'enregistrement d'un etudiant
    function addEtudiant($nom,$prenom,$email, $filiere){
        global $connexion;
        global $table;
        $sql ="INSERT INTO $table (nom,prenom,email, filiere) values
        ('$nom','$prenom','$email', '$filiere')";

        pg_query($connexion,$sql);
    }

    
    function getAllEtudiants(){
        global $connexion;
        global $table;
        $sql ="SELECT * FROM $table";

        return pg_query($connexion,$sql);
    }

    //La fonction de recuperation d'un etudiant via L'ID
    function getEtudiantById($id){
        global $connexion;
        global $table;
        $sql ="SELECT * FROM $table WHERE id = $1";
        $res =pg_query_params($connexion,$sql, array($id));
        
        $etudiant = pg_fetch_assoc($res);
        return $etudiant;
    }

    // Fonction de suppression d'un etudiant
    function deleteEtudiant($id){
        global $connexion;
        global $table;
        $sql ="DELETE FROM $table WHERE id = $id";

        return pg_query($connexion,$sql);
    }


    //Modifier les infos d'un etudiants
    function updateEtudiant($id,$nom,$prenom,$email, $filiere){
        global $connexion;
        global $table;
        $sql ="UPDATE $table set nom='$nom' ,prenom= '$prenom' ,email= '$email' , filiere = '$filiere'
        WHERE id = $id ";
        return pg_query($connexion,$sql);
    }
?>