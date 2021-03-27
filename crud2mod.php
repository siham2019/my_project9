<!DOCTYPE html>
<html>
<head>
	<title>gerer ressource-module</title>
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
<h1>liste des modules</h1>
<hr>
 <div class="df">
	 	<label> Rechercher : </label>
	 	 <input type="text" id="myInput" onkeyup="myFunction()" placeholder=" entrer nom de module ">
	     <a id="rsw" href="ajouter_m.php"><i class="fa fa-plus"></i> ajouter</a>
	 </div>

<table border="1" width="100%" id="myTable">
	<tr>

		<th>nom de module</th>

		<th>niveau de formation</th>
		<th>spécialité</th>
<th id="at">action</th>

	</tr>
	 <?php
  require_once 'model.php';
  $q=$bd->query("select * from module");

  while ($t=$q->fetch()){
  	$x=$bd->query("select * from niveau_de_formation where id_n=".$t['id_n']);
  	$x=$x->fetch();
  ?>
  <tr>

		<td><?php echo $t['nom_module'];?></td>
		<td><?php echo $x['nom_n'];?></td>
			<td><?php echo $x['specialité'];?></td>
		<!--	<td></td> -->
		<td>
			<a id="ml" href="modifier_m.php?id=<?php echo $t['id_module'];?>&id_n=<?php echo $t['id_n'];?>&n=<?php echo $x['nom_n'];?>&s=<?php echo $x['specialité'];?>&m=<?php echo $t['nom_module'];?>"><i class="fa fa-edit"></i>modifier</a>
<button id="s" type="button" onclick="delete_r('delete_m.php?id=',<?php echo $t['id_module'];?>)"><i class="fa fa-times"></i> supprimer</button></td><script type="text/javascript" src="g.js"></script>
		<?php }
  ?></tr>
	</table>
</div>
<script type="text/javascript" src="search.js"></script>

</body>
</html>
