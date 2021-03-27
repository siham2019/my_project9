<?php
require_once 'model.php';
 $nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$N_Tel=$_POST['N_Tel'];
$email=$_POST['email'];
$group=$_POST['group'];
$section=$_POST['section'];
$level=$_POST['level'];
$num_ins=$_POST['num_ins'];
if ($_POST['chef']=="oui") {
	$id="ET".$num_ins;

	$pass=str_shuffle($num_ins."$id");
	$id="'$id'";
	
    $bd->query("INSERT INTO `login`(`identifiant`, `pass`) VALUES (".$id.",'".$pass."')");
    require 'tutorial1.php';
    emailPass($nom,$prenom,$id,$pass,$email);
}
else
	$id="NULL";

$q=$bd->query("INSERT INTO etudiant(`num_ins`, `nome`, `prenome`, `N_Tele`, `emaile`, `idG`, `id_l`, `identifiant`)
VALUES('".$num_ins."','".$nom."','".$prenom."','".$N_Tel."','".$email."','".$group."',NULL,".$id.")");

if ($q) {
	  header('Location: addstudent.php');
}
?>
