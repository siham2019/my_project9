<?php
require_once 'model.php';

try {
     
    $id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
 
    // delete query
    $stmt1 = $bd->query("select * FROM module where id_module=".$id);
    $d = $stmt1->fetch();
    $stmt = $bd->query("DELETE FROM module where id_module=".$id);
     $st = $bd->query("DELETE FROM horaire_examen where id_h=".$d['id_h']);
     echo $d['id_h'];
     $q2=$bd->query("DELETE FROM `horaire_examen` WHERE `horaire_examen`.`id_h` =".$d['id_h']);
$q3=$bd->query("DELETE FROM `effectuer` WHERE `effectuer`.`id_h` =".$d['id_h']);
    if($stmt && $st && $q2 && $q3){
      
        header('Location: crud2mod.php');
    }else{
        die('erreur de suppression.');
    }
}
 
// show error
catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}


?>