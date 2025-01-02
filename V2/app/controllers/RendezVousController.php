<?php

require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../models/RendezVous.php';

$conn = new Database();
$model = new RendezVousModel($conn->getConnexion());

class RendezVousController{
    private $model;

    function __construct($model){
        $this->model = $model;
    }

    function index(){
        $rendezvous = $this->model->getAllRendezVous();
        require_once __DIR__ . '/../views/rendezvous/show.php';  
    }
    
    function create(){
        require_once __DIR__ . '/../views/rendezvous/create.php';
    }
    
    
    function store(){
        extract($_POST);
        $this->model->addRendezVous($date,$description, $client_id,$heure);
        header('location:index.php?controller=rendezvous');
    }
    
    function delete(){
        $id= $_GET['id'];
        $this->model->deleteRendezVous($id);
        header('location:index.php?controller=rendezvous');
    }
}



?>