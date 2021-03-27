<!DOCTYPE html>
<html>
<head>
	<title>specialité-ajouter</title>
	<link rel="stylesheet" type="text/css" href="ze1.css">

  <!-- <script type="text/javascript"  src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'>
</script>
<script type="text/javascript"  src='retreive.js'></script> -->
<style>
.op {
  color: black;
}
</style>
</head>
<body>
	<?php require_once 'dash.php'; ?>
	<div class="op">
<div class="w">
	<h2>ajouter specialité</h2>
	<form method="post" action="ajouter_se.php">
		<label>nom de specialité</label>
		<input type="text" name="nom" required pattern="[a-zA-Z ]+" placeholder="Entrer nom de specialité">
			<label>niveau de formation</label>
		<select name="level" id="level" required>
				   <option value="">
	                selectionnez le niveau de formation
			        </option>
		    		<option value="l2">
                 	 l2
			        </option>
			        <option value="l3">
                 	 l3
			        </option>
			        <option value="M1">
                 	 M1
			        </option>
			        <option value="M2">
                 	 M2
			        </option>
		</select>
			
		<input type="submit" name="submit">
				<?php
				if (isset($_POST['submit'])) {
					require_once 'model.php';

	$nom=$_POST['nom'];
	$level=$_POST['level'];
	$q=$bd->query("INSERT INTO `niveau_de_formation`(`id_n`, `nom_n`, `specialité`) VALUES (NULL,'".$level."','".$nom."')");
				}
				?>
	</form>
</div>

	</div>
</body>
</html>
