<!DOCTYPE html>
<html>
<head>
	<title>erreur-auto Affectation</title>
</head>
<body>
	<p>vous ne pouvez pas faire auto-affectation: </p>
<?php 
if ($_GET['e']==1) {
?>
<p>il faut  ajouter modules et les horaires </p>
<?php
}
if($_GET['e']==2){
	?>
     <p>il faut  ajouter les locaux </p>
   <?php
     }
     if($_GET['e']==3){
	?>
      <p>il faut  ajouter les enseignants </p>
   <?php
     }
      if($_GET['e']==4){
	?>
      <p>il faut  ajouter les etudiants </p>
   <?php
     }
?>
</body>
</html>