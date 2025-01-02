
<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Filiere</th>
    </tr>
    <?php while($p = pg_fetch_assoc($etudiants)) : ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['nom'] ?></td>
            <td><?= $p['prenom'] ?></td>
            <td><?= $p['email'] ?></td>
            <td><?= $p['filiere'] ?></td>
            <td>
                <a href="?controller=etudiant&action=delete&id=<?= $p['id'] ?>">Delete</a>
                <a href="?controller=etudiant&action=edit&id=<?= $p['id'] ?>">Update</a>
                
            </td>
        </tr>
    <?php endwhile ?>
</table>
<!-- <h3><a href="?controller=etudiant&&action=add">Ajouter un etudiant   </a></h3><h3><a href="?controller=cours&&action=add">Ajouter un cours</a></h3> -->
