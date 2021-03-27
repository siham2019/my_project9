<!DOCTYPE html>
<html>
<head>
	<title>gestion d'examen-proposer emploi</title>


<style>


/*
.op{
	color: black;
}*/
</style>
</head>
<body>


<div class="tru">
 <table border="1">

<?php


 $q=$bd->query("SELECT * FROM `module` INNER JOIN periode_examen on module.id_p=periode_examen.id_p WHERE `id_n`=
'". $t['id_n']."'");

if ($q->rowCount()!=0) {
	?>
	<tr>
						<th>date</th>
						<th>heure de debut</th>
						<th>heure de fin</th>
						<th>module</th>
	</tr>
	<?php
while ($aze=$q->fetch()) {
?>
<tr>
 <td> <?php echo $aze['date_p']; ?></td>
	 <td> <?php echo $aze['heure_debut']; ?></td>
		 <td> <?php echo $aze['heure_fin']; ?></td>

			 <td> <?php echo $aze['nom_module']; ?></td>
</tr>


<?php
}

}




?>
 </table>
</div>

</body>
</html>
