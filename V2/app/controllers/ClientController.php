<?php

require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../models/Client.php';

$conn = new Database();
$model = new ClientModel($conn->getConnexion());

class ClientController{
    private $model;

    function __construct($model){
        $this->model = $model;
    }

    function index(){
        $clients = $this->model->getAllClients();
        require_once __DIR__ . '/../views/clients/show.php';  
    }
    //Controlleur pour enregister les modifications 
function updateClientController(){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = (int)$_POST['id'];
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $email = trim($_POST['email']);
        $telephone = trim($_POST['telephone']);
        if($this->model->updateClient($id,$nom,$prenom,$email, $telephone)){
            header('location:index.php?controller=client');
            exit;
        }else{
            echo "Erreur lors de la mofication";
        }
    }
    }
    
    function create(){
        require_once __DIR__ . '/../views/clients/create.php';
    }
    
    
    function store(){
        extract($_POST);
        $this->model->addClient($nom,$prenom,$email, $telephone);
        header('location:index.php?controller=client');
    }
    
    function delete(){
        $id= $_GET['id'];
        $this->model->deleteClient($id);
        header('location:index.php?controller=client');
    }

    // Controlleur pour recuperer les infos d'un cours a modifier
function update($id){
    $client = $this->model->getClientById($id);
    if($client){
         require_once __DIR__ . '/../views/clients/edit.php';
    }else{
        echo "client introuvable";
    }
}


}



?>