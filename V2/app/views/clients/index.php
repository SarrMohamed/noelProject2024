<?php

require_once __DIR__ . '/../../controllers/ClientController.php';

$contr = new ClientController($model);


if(isset($_GET['action']) && !empty($_GET['action'])){
    if($_GET['action'] =='add'){
        $controle->create();
    }
    if($_GET['action'] =='save'){
        $controle->store();
    }
    if($_GET['action'] =='delete'){
        $controle->delete();
    }else if($_GET['action'] == 'edit'){
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        if($id <= 0){
            die("Invalid id ou not found");
        }
        $controle->update($id);
    }
    else if($_GET['action'] =='update'){
        $controle->updateClientController();
    }

}else {
    $controle->index();
}
?>