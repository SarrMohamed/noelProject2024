<?php

require_once __DIR__ . '/../../config/bootstrap.php';

use App\Controllers\EquipementController;

$controller = new EquipementController($entityManager);
$equipements = $controller->getAllEquipements();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int) $_POST['id'];

    $controller = new EquipementController($entityManager);
    $controller->deleteEquipement($id);

    header('Location: index.php');
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $etat = $_POST['etat'];
    $disponibilite = (bool) $_POST['disponibilite'];

    $controller = new EquipementController($entityManager);
    $controller->createEquipement($nom, $etat, $disponibilite);

    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des Equipements</title>
</head>
<body>
    <h1>Liste des Equipements</h1>
    <a href="create.php">Ajouter un Equipement</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Etat</th>
                <th>Disponibilite</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipements as $equipement): ?>
                <tr>
                    <td><?= $equipement->getId() ?></td>
                    <td><?= $equipement->getNom() ?></td>
                    <td><?= $equipement->getEtat() ?></td>
                    <td><?= $equipement->isDisponible() ? 'Oui' : 'Non' ?></td>
                    <td>
                        <form action="delete.php" method="POST">
                            <input type="hidden" name="id" value="<?= $equipement->getId() ?>">
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
