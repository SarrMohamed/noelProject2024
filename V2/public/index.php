
<h3><a href="?controller=client&&action=add">Ajouter un client</a></h3>
<h3><a href="?controller=rendezvous&&action=add">Reserver un rendez-vous</a></h3>
<?php


$controller = isset($_GET['controller']) ? $_GET['controller'] : 'null';
$action = isset($_GET['action']) ? $_GET['action'] : 'null';

    if($controller=='client'){
        require_once __DIR__ . '/../app/views/clients/index.php';
    }else if($controller=='rendezvous'){
        require_once __DIR__ . '/../app/views/rendezvous/index.php';
    }
    
?>