<!DOCTYPE html>
<html>
<head>
	<title>locaux-ajouter</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="ze1.css">
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
					<h2>Ajouter local</h2>
					<form method="POST" action="ajouter_l.php">


						<label>nom de local</label>
						<input type="text" name="nom_l" placeholder="Entrer le nom de local" required pattern="[a-zA-Z0-9 ]+">

						<label>type</label>
						 <select name="type">
								<option value="salle">salle</option>
								<option value="emphi">emphi</option>
						 </select>

					 <label>capacité (nombre de places)</label>
					 <input type="text" name="nombre" placeholder="Entrer nombre de places"required pattern="[0-9]+">

					 <input type="submit" name="submit">
				 </form>
					 <?php
					if (isset($_POST['submit'])) {
						require_once 'model.php';

					 $nom_l=$_POST['nom_l'];
						$type=$_POST['type'];
						 $nombre=$_POST['nombre'];
					$q=$bd->query("INSERT INTO `locaux`(`id_l`, `nom_l`, `type_l`, `capacité`) VALUES (NULL,'".$nom_l."','".$type."','".$nombre."')");
					}
				 ?>
        </div>
			</div>
</body>
</html>
