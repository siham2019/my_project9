<?php
require_once 'model.php';

try {

          $stmt = $bd->query(" select * FROM `groupe` WHERE `groupe`.`id_section` =".$_GET['id']);
            while ($t=$stmt->fetch()){
              $bd->query("update `etudiant` set idG=NULL WHERE `etudiant`.`idG` =".$t['idG']);
            $bd->query(" DELETE FROM `groupe` WHERE `groupe`.`idG` =".$t['idG']);
            }
       $stmt = $bd->query(" DELETE FROM `section` WHERE `section`.`id_section` =".$_GET['id']);
  


    if($stmt){

        header('Location: crud4ss.php');
    }else{
        die('erreur de suppression.');
    }
}

// show error
catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}


?>
