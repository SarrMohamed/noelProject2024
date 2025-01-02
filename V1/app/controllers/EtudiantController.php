<?php

require_once __DIR__ . '/../database.php';
require_once __DIR__ . '/../models/Etudiant.php';

//Controlleur pour afficher la liste des etudiants
function index()
{
    $etudiants = getAllEtudiants();
    require_once __DIR__ . '/../views/etudiants/show.php';
}


//Controlleur pour redirection vers le formulaire d'ajout d'un etudiant
function create()
{
    require_once __DIR__ . '/../views/etudiants/create.php';
}

function store()
{
    // Récupère les données du formulaire
    $nom = isset($_POST['nom']) ? trim($_POST['nom']) : '';
    $prenom = isset($_POST['prenom']) ? trim($_POST['prenom']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $filiere = isset($_POST['filiere']) ? trim($_POST['filiere']) : '';

    // Validation des données
    if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($filiere)) {
        if (addEtudiant($nom, $prenom, $email, $filiere)) {
            header('location:index.php?controller=etudiant');
        } else {
            echo "Erreur lors de l'ajout de l'étudiant.";
            header('location:index.php?controller=etudiant');
        }
    } else {
        echo "Tous les champs sont obligatoires.";
    }
}

//Controlleur poue la suppression
function delete()
{
    $id = $_GET['id'];
    deleteEtudiant($id);
    header('location:index.php?controller=etudiant');
}

// Controlleur pour recuperer les infos d'un etudiant a modifier
function update($id)
{
    $etudiant = getEtudiantById($id);
    if ($etudiant) {
        require_once __DIR__ . '/../views/etudiants/edit.php';
    } else {
        echo "Etudiant introuvable12345";
    }
}

//Controlleur pour enregister les modifications
function updateEtudiantController()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = (int)$_POST['id'];
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $email = trim($_POST['email']);
        $filiere = trim($_POST['filiere']);
        if (updateEtudiant($id, $nom, $prenom, $email, $filiere)) {
            header('location:index.php?controller=etudiant');
            exit;
        } else {
            echo "Erreur lors de la mofication";
        }
    }
}
