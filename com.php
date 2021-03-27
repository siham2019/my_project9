<?php
require_once 'model.php';

$nom_module=$_POST['nom_module'];
$level=$_POST['level'];

$q=$bd->query("INSERT INTO `module`(`id_module`, `nom_module`, `id_n`, `id_h`, `id_p`) VALUES (NULL,'".$nom_module."','".$level."',0,NULL)");


if ($q) {
	  header('Location: ajouter_m.php');
}



?>