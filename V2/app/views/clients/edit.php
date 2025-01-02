<?php if(!isset($client)) die("Donnees non disponible"); ?>

<form action="index.php?controller=client&action=update" method="POST">
    <input type="text" name="id" id="id" hidden value=" <?php echo htmlspecialchars($client['id'], ENT_QUOTES, 'UTF-8');  ?>" >
    <label for="">Nom</label>
    <input type="text" name="nom" id="nom" value="<?php echo htmlspecialchars($client['nom'], ENT_QUOTES, 'UTF-8');  ?>"><br>
    <label for="">Prenom</label>
    <input type="text" name="prenom" id="prenom" value="<?php echo htmlspecialchars($client['prenom'], ENT_QUOTES, 'UTF-8');  ?>"><br>
    <label for="">Email</label>
    <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($client['email'], ENT_QUOTES, 'UTF-8');  ?>"><br>
    <label for="">Telephone</label>
    <input type="text" name="telephone" id="telephone" value="<?php echo htmlspecialchars($client['filiere'], ENT_QUOTES, 'UTF-8');  ?>"><br>
    <button type="submit">Editer</button>
</form>