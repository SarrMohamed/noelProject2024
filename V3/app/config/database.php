<?php

class Database
{
    private $serveur = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbname = "gestionanimals";


    public function getConnexion()
    {
        try {

            $connexion = new PDO("pgsql:host=$this->serveur;dbname=$this->dbname", $this->user, $this->pwd);
            echo "connexion reussi";
        } catch (PDOException $e) {
            echo "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

        return $connexion;

    }

}
