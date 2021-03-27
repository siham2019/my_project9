<?php
require_once 'model.php';
 $nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$N_Tel=$_POST['N_Tel'];
$email=$_POST['email'];
$group=$_POST['group'];
$section=$_POST['section'];
$id=$_GET['id'];

$num_ins=$_POST['num_ins'];
$q=$bd->query("UPDATE etudiant SET num_ins='".$num_ins."',nome='".$nom."',prenome='".$prenom."',N_Tele='".$N_Tel."',emaile='".$email."',idG='".$group."' where num_ins=".$id); 
if ($q) {
	  header('Location: crud.php');
}
?>
