<!DOCTYPE html>
<html>
<head>
	<title>gerer ressource-groupe</title>
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
<h1>liste des groupes</h1>
<hr>
 <div class="df">
	 	<label> Rechercher : </label>
	 	 <input type="text" id="myInput" onkeyup="myFunction()" placeholder=" entrer numero de groupe ">
	  <a id="rsw" href="ajouter_g.php"><i class="fa fa-plus"></i>ajouter</a>


	 </div>
<table border="1" width="100%" id="myTable">
	<tr>

		<th>numero de groupe</th>

		<th>section</th>
		<th>niveau de formation</th>
	<th id="at">action</th>

	</tr>
	 <?php
  require_once 'model.php';
  $q=$bd->query("select * from groupe");

  while ($t=$q->fetch()){
	$x=$bd->query("select * from section where id_section=".$t['id_section']);
  	$x=$x->fetch();
  	$d=$bd->query("select * from niveau_de_formation where id_n=".$x['id_n']);
  	$d=$d->fetch();
  ?>
  <tr>
	<td><?php echo $t['nomG'];?></td>
	<td><?php echo $x['nom_section'];?></td>
	<td><?php echo $d['nom_n']."-".$d['specialité'];?></td>
		<!--	<td></td> -->

		<td>
<a id="ml" href="modifier_g.php?id=<?php echo $t['idG'];?>&ng=<?php echo $t['nomG'];?>&ns=<?php echo $x['nom_section'];?>&s=<?php echo $x['id_section'];?>&n=<?php echo $x['id_n'];?>&nn=<?php echo $d['nom_n'];?>&se=<?php echo $d['specialité'];?>"><i class="fa fa-edit"></i>modifier</a>

			<button id="s" type="button" onclick="delete_r('delete_g.php?id=',<?php echo $t['idG'];?> )"><i class="fa fa-times"></i>supprimer</button></td>
		<?php }
  ?></tr>
	</div>
	</div>
	</div>
	<script type="text/javascript" src="search.js"></script>
	<script type="text/javascript" src="g.js"></script>
</body>
</html>
