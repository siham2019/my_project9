<!DOCTYPE html>
<html>
<head>
	<title>gerer ressource-section</title>
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
<h1>liste des section</h1>
<hr>
 <div class="df">
	 	<label> Rechercher : </label>
	 	 <input type="text" id="myInput" onkeyup="myFunction()" placeholder=" entrer nom de section ">
	  <a id="rsw" href="ajouter_ss.php"><i class="fa fa-plus"></i>ajouter</a>


	 </div>
<table border="1" width="100%" id="myTable">
	<tr>

		

		<th>nom de section</th>
		<th>niveau de formation</th>
	<th id="at">action</th>

	</tr>
	 <?php
  require_once 'model.php';
  $q=$bd->query("select * from section");

  while ($t=$q->fetch()){
	
  	$d=$bd->query("select * from niveau_de_formation where id_n=".$t['id_n']);
  	$d=$d->fetch();
  ?>
  <tr>
	
	<td><?php echo $t['nom_section'];?></td>
	<td><?php echo $d['nom_n']."-".$d['specialité'];?></td>
		<!--	<td></td> -->

		<td>
<a id="ml" href="modifier_ss.php?ids=<?php echo $t['id_section'];?>&ns=<?php echo $t['nom_section'];?>&n=<?php echo $t['id_n'];?>&nn=<?php echo $d['nom_n'];?>&se=<?php echo $d['specialité'];?>"><i class="fa fa-edit"></i>modifier</a>

			<button id="s" type="button" onclick="delete_r('delete_ss.php?id=',<?php echo $t['id_section'];?> )"><i class="fa fa-times"></i>supprimer</button></td>
		<?php }
  ?></tr>
	</div>
	</div>
	</div>
	<script type="text/javascript" src="search.js"></script>
	<script type="text/javascript" src="g.js"></script>
</body>
</html>
