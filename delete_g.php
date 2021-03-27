<?php
require_once 'model.php';

try {

 
       //$stmt = $bd->query(" DELETE FROM `etudiant` WHERE `etudiant`.`idG` =".$_GET['id']);
	$stmt = $bd->query("update `etudiant` set idG=NULL WHERE `etudiant`.`idG` =".$_GET['id']);
    $stmt = $bd->query(" DELETE FROM `groupe` WHERE `groupe`.`idG` =".$_GET['id']);


    if($stmt){

        header('Location: crud4g.php');
    }else{
        die('erreur de suppression.');
    }
}

// show error
catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}


?>
