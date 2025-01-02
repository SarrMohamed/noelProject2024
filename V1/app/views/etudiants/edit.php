<?php if(!isset($etudiant)) die("Donnees non disponible"); ?>

<form action="index.php?controller=etudiant&action=update" method="POST">
    <input type="text" name="id" id="id" hidden value=" <?php echo htmlspecialchars($etudiant['id'], ENT_QUOTES, 'UTF-8');  ?>" >
    <label for="">Nom</label>
    <input type="text" name="nom" id="nom" value="<?php echo htmlspecialchars($etudiant['nom'], ENT_QUOTES, 'UTF-8');  ?>"><br>
    <label for="">Prenom</label>
    <input type="text" name="prenom" id="prenom" value="<?php echo htmlspecialchars($etudiant['prenom'], ENT_QUOTES, 'UTF-8');  ?>"><br>
    <label for="">Email</label>
    <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($etudiant['email'], ENT_QUOTES, 'UTF-8');  ?>"><br>
    <label for="">Filiere</label>
    <input type="text" name="filiere" id="filiere" value="<?php echo htmlspecialchars($etudiant['filiere'], ENT_QUOTES, 'UTF-8');  ?>"><br>
    <button type="submit">Editer</button>
</form>