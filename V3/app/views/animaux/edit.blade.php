<?php

require_once __DIR__. '/../../config/bootstrap.php';

use App\Controllers\AnimalController;
use App\Entities\Animal;

$animalModel = new Animal($entityManager);
$controller = new AnimalController($animalModel);

if (!isset($_GET['id'])) {
    echo "ID de l'animal manquant.";
    exit;
}

$id = (int)$_GET['id'];
$animal = $controller->findAnimalById($id);

if (!$animal) {
    echo "Animal non trouvé.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $type = $_POST['type'];
    $age = (int)$_POST['age'];
    $sante = $_POST['sante'];
    $equipementId = (int)$_POST['equipementId'];

    $controller->updateAnimal($id, $type, $age, $sante, $equipementId);

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier un Animal</title>
</head>
<body>
    <h1>Modifier un Animal</h1>
    <form method="POST">
        <label for="type">Type:</label>
        <input type="text" id="type" name="type" value="<?= $animal->getType() ?>" required>
        <br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="<?= $animal->getAge() ?>" required>
        <br>
        <label for="sante">Santé:</label>
        <input type="text" id="sante" name="sante" value="<?= $animal->getSante() ?>" required>
        <br>
        <label for="equipementId">ID Équipement:</label>
        <input type="number" id="equipementId" name="equipementId" value="<?= $animal->getEquipementId() ?>" required>
        <br>
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>
