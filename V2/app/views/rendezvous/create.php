

<form action="?controller=rendezvous&&action=save" method="POST">
    <label for="">Date</label>
    <input type="date" name="date"><br>
    <label for="">heure</label>
    <input type="time" name="heure"><br>
    <label for="">Identifiant du client</label>
    <input type="text" name="client_id"><br>
    <label for="">Description</label><br>
    <textarea name="text" name="description" id="description"></textarea><br><br>
    <button type="submit" name="add">Ajouter</button>
</form>