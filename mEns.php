<?php require_once 'model.php';
      if (isset($_POST['submit'])) {

$y=$bd->query("UPDATE `enseignant` SET `id_e` = '".$_POST['cin']."', `nom_e` = '".$_POST['nom']."', `prenom_e` = '".$_POST['prenom']."', `email` = '".$_POST['email']."', `N_Tel` = '".$_POST['N_Tel']."', `grade` = '".$_POST['grade']."' WHERE `enseignant`.`id_e` = '".$_GET['id']."'");
  foreach ($_POST['res'] as $n) {
  	       if ($n!="NULL") {
  	     $a = $bd->query("UPDATE `module` SET `id_e` = '".$_POST['cin']."' WHERE `module`.`id_module` = ".$n);
  	       }
}
    if ($y ) {
  header('Location: crudEns.php');
}
      }
      ?>
      