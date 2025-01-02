<?php

require_once __DIR__ .  '/../../config/bootstrap.php';

use App\Controllers\AnimalController;
use app\Entities\Animal;

$animalModel = new Animal($entityManager);
$controller = new AnimalController($animalModel);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
    $controller->deleteAnimal((int)$_POST['delete_id']);
    header('Location: index.php');
    exit;
}

$animals = $controller->getAllAnimals();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des Animaux</title>
</head>
<body>
    <h1>Liste des Animaux</h1>
    <a href="create.php">Ajouter un Animal</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Age</th>
                <th>Santé</th>
                <th>ID Équipement</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animals as $animal): ?>
                <tr>
                    <td><?= $animal->getId() ?></td>
                    <td><?= $animal->getType() ?></td>
                    <td><?= $animal->getAge() ?></td>
                    <td><?= $animal->getSante() ?></td>
                    <td><?= $animal->getEquipementId() ?></td>
                    <td>
                        <a href="edit.php?id=<?= $animal->getId() ?>">Modifier</a>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="delete_id" value="<?= $animal->getId() ?>">
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
