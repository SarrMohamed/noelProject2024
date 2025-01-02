
<a href="?controller=client&&action=add">Add</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Telephone</th>
    </tr>
    
    <?php foreach ($clients as $c) : ?>
        <tr>
            <td><?= $c['id'] ?></td>
            <td><?= $c['nom'] ?></td>
            <td><?= $c['prenom'] ?></td>
            <td><?= $c['email'] ?></td>
            <td><?= $c['telephone'] ?></td>
            <td>
                <a href="?controller=client&&action=delete&&id=<?= $c['id'] ?>">Delete</a>
                <a href="?controller=client&&action=edit&&id=<?= $c['id'] ?>">Update</a>
                
            </td>
        </tr>
    <?php endforeach ?>
</table>