<!DOCTYPE html>
<html>
<head>
	<title>groupe-ajouter</title>
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
	<h2>ajouter groupe</h2>
	<form method="post" action="ajouter_g.php">
		<label>numero de groupe</label>
		<input type="text" name="numero" required pattern="[0-9]+" placeholder="Entrer numero de groupe">
			<label>niveau de formation</label>
		<select name="level" id="level"  onchange="ajax_request(event,'section','ids','noms',false,true)">
				<option value="0">
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
				<label>section</label>
		<select id="section" name="section">
			<option value="0">
	selectionnez le section
			</option>
	</select>
		<input type="submit" name="submit">
				<?php
				if (isset($_POST['submit'])) {
					require_once 'model.php';

	$nomG=$_POST['numero'];
	$section=$_POST['section'];
	$q=$bd->query("INSERT INTO `groupe`(`idG`, `nomG`, `id_section`) VALUES (NULL,'".$nomG."','".$section."')");
				}
				?>
	</form>
</div>

	</div>
<script type="text/javascript" src="sd.js"></script>
</body>
</html>
