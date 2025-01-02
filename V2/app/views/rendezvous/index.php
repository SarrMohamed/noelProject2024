<?php
// require_once '../../Database.php';
// require_once '../../models/RendezVous.php';
require_once __DIR__ . '/../../controllers/RendezVousController.php';


$controle = new RendezVousController($model);


if(isset($_GET['action']) && !empty($_GET['action'])){
    if($_GET['action'] =='add'){
        $controle->create();
    }
    if($_GET['action'] =='save'){
        $controle->store();
    }
    if($_GET['action'] =='delete'){
        $controle->delete();
    }

}else {
    $controle->index();
}

?>