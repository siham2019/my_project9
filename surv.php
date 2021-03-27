<!DOCTYPE html>
<html>
<head>
	<title>gestion d'examen-proposer emploi</title>
	<link rel="stylesheet" type="text/css" href="pA.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.io{
	color: black;
}

</style>

</style>
</head>
<body>
	<?php

	if (isset($_GET['idens'])) {

?>
<div style="display:block;">
<?php require_once 'd2.php'; ?>
</div>
<div class="io">

		<?php

      require_once 'model.php';

 $q=$bd->query("SELECT * FROM `enseignant` INNER JOIN surveiller on enseignant.id_e=surveiller.id_e
	 inner join horaire_examen on surveiller.id_h=horaire_examen.id_h
	 INNER join effectuer on effectuer.id_h=horaire_examen.id_h
	 INNER JOIN locaux on effectuer.id_l=locaux.id_l where enseignant.identifiant='". $_GET['idens']."'  group by enseignant.id_e ORDER BY `effectuer`.`id_l` ASC ");

if ($q->rowCount()!=0) {
	?>

	<h2>planning de surveillance</h2>
	<hr>
	<table border="1" width="100%">
		<tr>
			<th>date</th>
			<th>heure de debut</th>
			<th>heure de fin</th>
			<th>locaux</th>
		</tr>
			<?php

while ($t=$q->fetch()) {
		 ?>
		 <tr>
		 	<td><?php echo $t['date_h'];?></td>
			<td><?php echo $t['heure_debut'];?></td>
			<td><?php echo $t['heure_fin'];?></td>
			<td><?php echo $t['nom_l'];?></td>
		 </tr>

	<?php
   }
?>
</table>
<div style="display:flex;justify-content:center;margin:20px;">
	<a href="#" id="s"><i class="fa fa-file-pdf-o"></i> enregistrer en pdf</a>
	 <a href="#" id="ml"><i class="fa fa-print"></i> imprimer</a>
</div>
<?php
}
else {
	echo "<h3>pas de planning pour le moment</h3>
";
}
 ?>


 </div>
<?php
	}
	else {
		 header("Location:home.php?d=2");
	}
	?>


</body>
</html>
