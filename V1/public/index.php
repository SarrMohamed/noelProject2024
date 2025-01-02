<h3><a href="?controller=etudiant&&action=add">Ajouter un etudiant</a></h3>
<h3><a href="?controller=cours&&action=add">Ajouter un cours</a></h3>

<?php
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'null';
$action = isset($_GET['action']) ? $_GET['action'] : 'null';

if($controller=='etudiant'){
    require_once __DIR__ . '/../app/views/etudiants/index.php';
}else if($controller=='cours' ){
    require_once __DIR__ . '/../app/views/cours/index.php';
}
?>
<br>