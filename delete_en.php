<?php
require_once 'model.php';

try {

 

    $stmt = $bd->query("DELETE FROM `enseignant` WHERE `enseignant`.`id_e` ='".$_GET['id']."'");


    if($stmt){

        header('Location: crudEns.php');
    }else{
        die('erreur de suppression.');
    }
}

// show error
catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}


?>