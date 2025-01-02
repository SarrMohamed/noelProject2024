
<a href="?controller=rendezvous&&action=add">Add</a>
<table>
    <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Heure</th>
        <th>decription</th>
        <th>Identifiant du client</th>
    </tr>
    
    <?php foreach ($rendezvous as $rv) : ?>
        <tr>
            <td><?= $rv['id'] ?></td>
            <td><?= $rv['date'] ?></td>
            <td><?= $rv['heure'] ?></td>
            <td><?= $rv['description'] ?></td>
            <td><?= $rv['client_id'] ?></td>
            <td>
                <a href="?controller=rendezvous&&action=delete&&id=<?= $rv['id'] ?>">Delete</a>
                <a href="?controller=rendezvous&&action=update&&id=<?= $rv['id'] ?>">Update</a>
                
            </td>
        </tr>
    <?php endforeach ?>
</table>