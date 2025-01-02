<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <title>Ajouter un
        
    
    cours</title>
</head>
<body>
    <h1>Ajouter un cours</h1>
    <form method="POST" action="index.php?controller=cours&action=save">
        <label for="nom">Nom du Cours :</label>
        <input type="text" id="nomcours" name="nomcours" required><br>
        
        <label for="prenom">Code du cours :</label>
        <input type="text" id="codecours" name="codecours" required><br>

        <label for="email">Nombre d'heurs :</label>
        <input type="number" id="nombreheurs" name="nombreheurs" required><br>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
