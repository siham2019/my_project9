<!DOCTYPE html>
<html>
<head>
	<title>section-ajouter</title>
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
	<h2>ajouter section</h2>
	<form method="post" action="ajouter_ss.php">
		<label>nom de section</label>
		<input type="text" name="numero" required pattern="[A-Z]+" placeholder="Entrer nom de section">
			<label>niveau de formation</label>
		<select name="level" id="level" >
				<option value="">
	selectionnez le niveau de formation
			</option>
			 <?php
		require_once 'model.php';
		$q=$bd->query("select * from niveau_de_formation");
		?>
		<?php
		while ($t=$q->fetch()){
			?>
			<option value= "<?php echo $t['id_n'];?>">

				<?php echo $t['nom_n']."-". $t['specialité']; ?>

			</option>
		<?php } ?>
		</select>
			
		<input type="submit" name="submit">
				<?php
				if (isset($_POST['submit'])) {
					require_once 'model.php';

	$nom=$_POST['numero'];
	$level=$_POST['level'];
	$q=$bd->query("INSERT INTO `section`(`id_section`, `nom_section`, `id_n`) VALUES (NULL,'".$nom."','".$level."')");
				}
				?>
	</form>
</div>

	</div>
</body>
</html>
