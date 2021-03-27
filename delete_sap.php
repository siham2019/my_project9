<?php
require 'model.php';
try {
	$df=$bd->query("SELECT * FROM `enseignant` INNER join surveiller on surveiller.id_e = enseignant.id_e WHERE surveiller.id_h=".$_GET['idh']);
     while ($f = $df->fetch()) {
	    $c=$f['limite_horaire']-1;
	  
	    $bd->query("update enseignant set limite_horaire=".$c." WHERE id_e='".$f['id_e']."'");
      }
     $bd->query("DELETE FROM `effectuer` WHERE id_h=".$_GET['idh']);
    $bd->query("DELETE FROM `surveiller` WHERE id_h=".$_GET['idh']);
    $aa=$bd->query("SELECT * FROM `etudiant` INNER join groupe on groupe.idG = etudiant.idG INNER JOIN section on section.id_section = groupe.id_section INNER join niveau_de_formation on niveau_de_formation.id_n = '".$_GET['d']."' AND niveau_de_formation.id_n = section.id_n");
      while ($g = $aa->fetch()) {
	   $bd->query("update etudiant set id_l=NULL WHERE num_ins=".$g['num_ins']);
      }
      if (isset($_GET['t'])) {
      	     header('Location: voir.php?d='.$_GET['d']);
      	 }
} catch (Exception $e) {
      echo $e;
}

?>