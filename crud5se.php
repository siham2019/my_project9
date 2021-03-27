<!DOCTYPE html>
<html>
<head>
	<title>gerer ressource-specialité</title>
		<link rel="stylesheet" type="text/css" href="pA.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		.io{
			color: black;
		}
		</style>
</head>
<body>

 <?php require_once 'dash.php'; ?>

	<div class="io">
<h1>liste des specialités</h1>
<hr>
 <div class="df">
	 	<label> Rechercher : </label>
	 	 <input type="text" id="myInput" onkeyup="myFunction()" placeholder=" entrer nom de specialités ">
	  <a id="rsw" href="ajouter_se.php"><i class="fa fa-plus"></i>ajouter</a>


	 </div>
<table border="1" width="100%" id="myTable">
	<tr>

		

		<th>nom de specialité</th>
		<th>niveau de formation</th>
	<th id="at">action</th>

	</tr>
	 <?php
  require_once 'model.php';
  $q=$bd->query("select * from niveau_de_formation");

  while ($t=$q->fetch()){

  ?>
  <tr>
	
	<td><?php echo $t['specialité'];?></td>
	<td><?php echo $t['nom_n'];?></td>
		<!--	<td></td> -->

		<td>
<a id="ml" href="modifier_se.php?ids=<?php echo $t['id_n'];?>&nn=<?php echo $t['nom_n'];?>&se=<?php echo $t['specialité'];?>"><i class="fa fa-edit"></i>modifier</a>

			<button id="s" type="button" onclick="delete_r('delete_se.php?id=',<?php echo $t['id_n'];?> )"><i class="fa fa-times"></i>supprimer</button></td>
		<?php }
  ?></tr>
	</div>
	</div>
	</div>
	<script type="text/javascript" src="search.js"></script>
	<script type="text/javascript" src="g.js"></script>
</body>
</html>
