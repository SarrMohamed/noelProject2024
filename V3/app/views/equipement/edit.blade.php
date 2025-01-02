<?php

require_once __DIR__ .  '/../../config/bootstrap.php';

use App\Controllers\EquipementController;

if (!isset($_GET['id'])) {
    echo "ID de l'équipement manquant.";
    exit;
}

$id = (int)$_GET['id'];

$controller = new EquipementController($entityManager);
$repository = $entityManager->getRepository(\App\Entities\Equipement::class);
$equipement = $repository->find($id);

if (!$equipement) {
    echo "Équipement non trouvé.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier un Équipement</title>
</head>
<body>
    <h1>Modifier un Équipement</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $equipement->getId() ?>">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?= $equipement->getNom() ?>" required>
        <br>
        <label for="etat">État:</label>
        <input type="text" id="etat" name="etat" value="<?= $equipement->getEtat() ?>" required>
        <br>
        <label for="disponibilite">Disponibilité:</label>
        <select id="disponibilite" name="disponibilite">
            <option value="1" <?= $equipement->isDisponible() ? 'selected' : '' ?>>Oui</option>
            <option value="0" <?= !$equipement->isDisponible() ? 'selected' : '' ?>>Non</option>
        </select>
        <br>
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>
