<!DOCTYPE html>
<html>
<head>
	<title>locaux-modifier</title>
	<link rel="stylesheet" href="ze1.css">
<style>
.op h2{
	color: black;
}
</style>

</head>
<body>
 <?php require_once 'dash.php'; ?>

			<div class="op">
				<div class="w">
					<h2>modifier local</h2>
	      <form method="POST" action="k.php?id=<?php echo $_GET['id'];?>">
	      	<label>nom de local</label>
	      		<input type="text" name="nom_l" required pattern="[a-zA-Z0-9 ]+" value="<?php echo $_GET['n'];?>">
	      	<label>type</label>
	      	<select name="type">
	          <?php
	          if ($_GET['t']=="salle") {
	          ?>  <option value="salle">salle</option>
	          <option value="emphi">emphi</option>
	          <?php }else{?>
	      <option value="emphi">emphi</option>
	      <option value="salle">salle</option>
	       <?php } ?>

	      	</select>
	      	<label>capacité (nombre de places)</label>
	        <input type="text" name="nombre" required pattern="[0-9]+" value="<?php echo $_GET['c'];?>">
	        <input type="submit" name="submit">
	      </form>
				</div>

</div>
</body>
</html>
