<?php if(!isset($rendezvous)) die("Donnees non disponible"); ?>

<form action="index.php?controller=rendezvous&action=update" method="POST">
    <input type="text" name="id" id="id" hidden value=" <?php echo htmlspecialchars($rendezvous['id'], ENT_QUOTES, 'UTF-8');  ?>" >
    <label for="">Date</label>
    <input type="date" name="date"  value="<?php echo htmlspecialchars($rendezvous['date'], ENT_QUOTES, 'UTF-8');  ?>"><br>
    <label for="">Heure</label>
    <input type="time" name="heure"  value="<?php echo htmlspecialchars($rendezvous['heure'], ENT_QUOTES, 'UTF-8');  ?>"><br>
    <label for="">Description</label>
    <input type="text" name="description" id="email" value="<?php echo htmlspecialchars($rendezvous['description'], ENT_QUOTES, 'UTF-8');  ?>"><br>
    <label for="">Client</label>
    <input type="text" name="client_id"  value="<?php echo htmlspecialchars($rendezvous['client_id'], ENT_QUOTES, 'UTF-8');  ?>"><br>
    <button type="submit">Editer</button>
</form>