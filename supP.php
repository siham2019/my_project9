<?php
 
  require_once 'model.php';

 
try {

$bd->query("TRUNCATE `effectuer`");
$bd->query("TRUNCATE `surveiller`");

$bd->query("update etudiant set id_l=NULL");
$bd->query("update enseignant set limite_horaire=0");

        header('Location: emploi_v1.php');	

} catch (Exception $e) {
	echo $e;
}





?>