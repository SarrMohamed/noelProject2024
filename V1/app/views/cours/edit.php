<?php if(!isset($cours)) die("Donnees non disponible"); ?>

<form action="index.php?controller=cours&action=update" method="POST">
    <input type="text" name="id" id="id" hidden value=" <?php echo htmlspecialchars($cours['id'], ENT_QUOTES, 'UTF-8');  ?>" >
    <label for="">Nom du cours</label>
    <input type="text" name="nomcours" id="nomcours" value="<?php echo htmlspecialchars($cours['nomcours'], ENT_QUOTES, 'UTF-8');  ?>"><br>
    <label for="">Code du cours</label>
    <input type="text" name="codecours" id="codecours" value="<?php echo htmlspecialchars($cours['codecours'], ENT_QUOTES, 'UTF-8');  ?>"><br>
    <label for="">Nombre d'heurs</label>
    <input type="number" name="nombreheurs" id="nombreheurs" value="<?php echo htmlspecialchars($cours['nombreheurs'], ENT_QUOTES, 'UTF-8');  ?>"><br>
    <button type="submit">Editer</button>
</form>