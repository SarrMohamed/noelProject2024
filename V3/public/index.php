<?php

require_once  __DIR__ . '/../app/config/bootstrap.php';

use App\Controllers\AnimalController;
use App\Controllers\EquipementController;
use App\Models\Animal;
use App\Models\Equipement;

$controller = $_GET['controller'] ?? '';

// Afficher en fonction de l'action
switch ($controller) {
    case 'animal':
        require_once  __DIR__ . '/../app/controllers/AnimalController.php';
        include '';
        break;
    case 'equipement':
        require_once  __DIR__ . '/../app/controllers/EquipementController.php';
        break;
    default:
        echo "Action non reconnue.";
        break;
}
