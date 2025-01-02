<?php

require_once __DIR__ . '/../../config/bootstrap.php';

use app\Controllers\AnimalController;
use app\Entities\Animal;

$animalModel = new Animal($entityManager);
$controller = new AnimalController($animalModel);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $type = $_POST['type'];
    $age = (int)$_POST['age'];
    $sante = $_POST['sante'];
    $equipementId = (int)$_POST['equipementId'];

    $controller->createAnimal($type, $age, $sante, $equipementId);

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un Animal</title>
</head>
<body>
    <h1>Ajouter un Animal</h1>
    <form method="POST">
        <label for="type">Type:</label>
        <input type="text" id="type" name="type" required>
        <br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <br>
        <label for="sante">Santé:</label>
        <input type="text" id="sante" name="sante" required>
        <br>
        <label for="equipementId">ID Équipement:</label>
        <input type="number" id="equipementId" name="equipementId" required>
        <br>
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>
