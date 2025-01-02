<?php

    $table = 'cours';


    //La methode d'enregistrement d'un cours
    function addCours($nomCours,$codeCours,$nombreHeurs){
        global $connexion;
        global $table;
        $sql ="INSERT INTO $table (nomcours,codecours,nombreheurs) values
        ('$nomCours','$codeCours',$nombreHeurs)";

        pg_query($connexion,$sql);
    }
    function getAllCours(){
        global $connexion;
        global $table;
        $sql ="SELECT * FROM $table";

        return pg_query($connexion,$sql);
    }

    //La fonction de recuperation d'un cours via L'ID
    function getCoursById($id){
        global $connexion;
        global $table;
        $sql ="SELECT * FROM $table WHERE id = $1";
        $res =pg_query_params($connexion,$sql, array($id));
        
        $cours = pg_fetch_assoc($res);
        return $cours;
    }

    // Fonction de suppression d'un cours
    function deleteCours($id){
        global $connexion;
        global $table;
        $sql ="DELETE FROM $table WHERE id = $id";

        return pg_query($connexion,$sql);
    }


    //Modifier les infos d'un cours
    function updateCours($id,$nomCours,$codeCours,$nombreHeurs){
        global $connexion;
        global $table;
        $sql ="UPDATE $table set nomcours='$nomCours' ,codecours= '$codeCours' ,nombreheurs= $nombreHeurs
        WHERE id = $id ";
        return pg_query($connexion,$sql);
    }
?>