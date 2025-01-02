<?php
require_once __DIR__ . '/../database.php';
require_once __DIR__ . '/../models/Cours.php';

//Controlleur pour afficher la liste des cours
function index(){
    $cours = getAllCours();
    require_once __DIR__ . '/../views/cours/show.php';
}


//Controlleur pour redirection vers le formulaire d'ajout d'un cours
function create(){
    require_once __DIR__ . '/../views/cours/create.php';
}


 function store() {
    // Récupère les données du formulaire
    $nomCours = isset($_POST['nomcours']) ? trim($_POST['nomcours']) : '';
    $codeCours = isset($_POST['codecours']) ? trim($_POST['codecours']) : '';
    $nombreHeurs = isset($_POST['nombreheurs']) ? trim($_POST['nombreheurs']) : '';
   
    // Validation des données
    if (!empty($nomCours) && !empty($codeCours) && !empty($nombreHeurs)) {
        if (addCours($nomCours, $codeCours, $nombreHeurs)) {
            header('location:index.php?controller=cours');
        } else {
            echo "Erreur lors de l'ajout du cours.";
            header('location:index.php?controller=cours');
        }
    } else {
        echo "Tous les champs sont obligatoires.";
    }
}

//Controlleur pour la suppression
function delete(){
    $id= $_GET['id'];
    deleteCours($id);
    header('location:index.php?controller=cours');
}

// Controlleur pour recuperer les infos d'un cours a modifier
function update($id){
        $cours = getCoursById($id);
        if($cours){
             require_once __DIR__ . '/../views/cours/edit.php';
        }else{
            echo "Cours introuvable";
        }
    }
    

    //Controlleur pour enregister les modifications 
function updateCoursController(){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = (int)$_POST['id'];
        $nomCours = trim($_POST['nomcours']);
        $codeCours = trim($_POST['codecours']);
        $nombreHeurs = trim($_POST['nombreheurs']);
        if(updateCours($id, $nomCours, $codeCours, $nombreHeurs)){
            header('location:index.php?controller=cours');
            exit;
        }else{
            echo "Erreur lors de la mofication";
        }
 }
}

?>