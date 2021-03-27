<!DOCTYPE html>
<html lang="" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>les salles des etudiants</title>
		<link rel="stylesheet" href="ze1.css">
	</head>
	<body>

		<div style="display:block;">
		<?php require_once 'd2.php'; ?>
		</div>
		<div class="op">
			<div class="w">

 <form  action="salle.php" method="post">
	 <label>numero d'inscription</label>
<input type="text" name="numI" required pattern="[0-9]+" placeholder="entrer numero d'inscription" >
<input type="submit" name="sub">
 </form>
 <?php

if (isset($_POST['sub'])) {
	require_once 'model.php';

	$wx=$bd->query("SELECT * FROM `etudiant` inner join locaux on locaux.id_l=etudiant.id_l WHERE num_ins='".$_POST['numI']."'");
if ($wx->rowCount()!=0) {
$aze=$wx->fetch();
?>
<script type="text/javascript">
	alert("<?php echo "vous etes dans la salle ".$aze['nom_l'];?>");
</script>
<?php
}
else {?>

 <h3 style="color: red;">liste de salle n'est pas disponibles pour le moment</h3>
<?php }
}



  ?>

</div>
</div>
	</body>
</html>
