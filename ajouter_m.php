<!DOCTYPE html>
<html>
<head>
	<title>module-ajouter</title>
	<link rel="stylesheet" href="ze1.css">
	<style>
	.op{
		color: black;
	}
	</style>
</head>
<body>
	<?php require_once 'dash.php'; ?>
 <div class="op">
	 <div class="w">
<h2>ajouter module</h2>
<form method="post" action="com.php">
	<label>nom de module</label>
	<input type="text" name="nom_module" placeholder="Enter nom de module" required pattern="[0-9a-zA-Z ]+">
		<label>niveau de formation</label>
	<select name="level">
		 <?php
  require_once 'model.php';
  $q=$bd->query("select * from niveau_de_formation");
  ?>
  <?php
  while ($t=$q->fetch()){
    ?>
    <option value= <?php echo $t['id_n'];?>>

    	<?php echo $t['nom_n']."-". $t['specialité']; ?>

    </option>
  <?php } ?>
	</select>
	<input type="submit">
</form>
</div>
</div>
</body>
</html>
