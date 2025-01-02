
<h1>Liste des cours</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Nom du cours</th>
        <th>Code du cours</th>
        <th>Nombre d'heurs</th>
    </tr>
    <?php while($p = pg_fetch_assoc($cours)) : ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['nomcours'] ?></td>
            <td><?= $p['codecours'] ?></td>
            <td><?= $p['nombreheurs'] ?></td>
            <td>
                <a href="?controller=cours&action=delete&id=<?= $p['id'] ?>">Delete</a>
                <a href="?controller=cours&action=edit&id=<?= $p['id'] ?>">Update</a>
                
            </td>
        </tr>
    <?php endwhile ?>
</table>
<!-- <a href="?controller=cours&&action=add">Ajouter un cours</a> -->