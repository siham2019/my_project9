<!DOCTYPE html>
<html>
<head>
	<title>gestion d'examen-proposer emploi</title>


	<link rel="stylesheet" type="text/css" href="h.css">
<link rel="stylesheet" type="text/css" href="o.css">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Exo+2&display=swap" rel="stylesheet">
<link rel="stylesheet" href="ty.css">
<link rel="stylesheet" href="ze1.css">
<link rel="stylesheet" href="pA.css">
<style>


/*
.op{
	color: black;
}*/
</style>
</head>
<body>
	<?php

	if (isset($_GET['ide'])) {

?>
	<div class="oy">

		<div class="G">
			 <h1>G</h1>
	  </div>
		<div class="iop" style="margin-left: 1070px">
			<a href="home.php" ><i class="fa fa-home"></i> Acceuil</a>

		<?php

      require_once 'model.php';

 $q=$bd->query("SELECT * FROM etudiant INNER JOIN groupe ON groupe.idG = etudiant.idG INNER JOIN section ON section.id_section = groupe.id_section INNER JOIN niveau_de_formation ON niveau_de_formation.id_n = section.id_n WHERE num_ins='". $_GET['ide']."'");
$t=$q->fetch();




		 ?>	<h4 style="margin-top: 11px;margin-left: 10px;"><i class="fa fa-user-circle"></i> <?php echo $t['nome']." ".$t['prenome']; ?></h4>
 			</div>

</div>

<div class="tt" style="color:black;">
<div class="op">
<div class="w" style="left:20px;">
	<h2>
		Définir les horaires
	</h2>
  <form method="post" action="proposer.php?ide=<?php echo $_GET['ide'];?>">


<label>Module</label>
<select name="m" required>
		<option>choisir le module</option>
	<?php
     $wx=$bd->query("select * from module where id_n='".$t['id_n']."'");

	 ?>
     <?php

      while ($z=$wx->fetch()) {
	 ?>
	  <option value="<?php echo $z['id_module'];?>">
         <?php echo $z['nom_module'];?>
       </option>
	<?php
      }

       ?>
</select>

<label>heure </label>
<select name="hd"  required>
		<option value="">selectionner heure</option>
			<option value="08:30">8:30-10:00</option>
			<option value="10:00">10:00-11:30</option>
			<option value="11:30">11:30-13:00</option>
			<option value="13:00">13:00-14:30</option>
		</select>

<label>date </label>
<input type="date" name="d" required>
<input style="color:white;" type="submit" name="submit" value="valider">
  </form>
</div>
</div>
</div>
</body>
</html>
