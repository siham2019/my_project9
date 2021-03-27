<?php
require_once 'model.php';

try {

    $a1=$bd->query("UPDATE `module` SET id_e = NULL WHERE `module`.`id_e`= '".$_GET['id']."'");
    $a=$bd->query("DELETE FROM `enseignant` WHERE `enseignant`.`id_e` ='".$_GET['id']."'");
    if( $a1 && $a){

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
