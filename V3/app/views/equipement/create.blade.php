<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un Equipement</title>
</head>
<body>
    <h1>Ajouter un Equipement</h1>
    <form action="store.php" method="POST">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>
        <br>
        <label for="etat">Etat:</label>
        <input type="text" id="etat" name="etat" required>
        <br>
        <label for="disponibilite">Disponibilite:</label>
        <select id="disponibilite" name="disponibilite">
            <option value="1">Oui</option>
            <option value="0">Non</option>
        </select>
        <br>
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>
