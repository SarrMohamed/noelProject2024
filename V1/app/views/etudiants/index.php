<?php
// http://projet_noel_2024.test:8081/V1/public/



    require_once __DIR__ . '/../../controllers/EtudiantController.php';

if(isset($_GET['action']) && !empty($_GET['action'])){
    if($_GET['action'] =='add'){
        create();
    }
    if($_GET['action'] =='save'){
        store();
    }
     else if($_GET['action'] =='delete'){
        delete();
    }
    else if($_GET['action'] === 'edit'){
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        if($id <= 0){
            die("Invalid id ou not found");
        }
        update($id);
    }
    else if($_GET['action'] =='update'){
        updateEtudiantController();
    }

}else {
    index();
}


?>