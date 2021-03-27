<?php
require_once 'model.php';
 $nom_module=$_POST['nom_module'];
$level=$_POST['level'];
$id=$_GET['id'];

$q=$bd->query("UPDATE module SET nom_module='".$nom_module."',id_n='".$level."' where id_module=".$id); 
if ($q) {
	  header('Location: crud2mod.php');
}
?>
