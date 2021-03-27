<?php
require_once 'model.php';

try {
        $bd->query("DELETE FROM `section` WHERE `section`.`id_n` =".$_GET['id']);
        $bd->query("DELETE FROM `module` WHERE `module`.`id_n` =".$_GET['id']);
       $stmt = $bd->query("DELETE FROM `niveau_de_formation` WHERE `niveau_de_formation`.`id_n`=".$_GET['id']);
  


    if($stmt){

        header('Location: crud5se.php');
    }else{
      
        die('erreur de suppression.');
    }
}

// show error
catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}


?>
