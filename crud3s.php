<!DOCTYPE html>
<html>
<head>
	<title>gerer ressource-locaux</title>
	<link rel="stylesheet" type="text/css" href="pA.css">
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.io{
	color: black;
}
</style>
</head>
<body>
	<div class="hi">
 <?php require_once 'dash.php'; ?>
		<div class="fp">



	<div class="io">
<h1> liste des locaux</h1>
<hr>
 <div class="df">
	 	<label> Rechercher : </label>
	 	 <input type="text" id="myInput" onkeyup="myFunction()" placeholder=" entrer nom de local ">
	   <a id="rsw" href="ajouter_l.php"><i class="fa fa-plus"></i> ajouter</a>

	 </div>
<table border="1" id="myTable">
	<tr>

		<th>nom de local</th>
<th>type de local</th>
		<th>capacité</th>
<th id="at">action</th>


	</tr>
	 <?php
  require_once 'model.php';
  $q=$bd->query("select * from locaux");

  while ($t=$q->fetch()){

  ?>
  <tr>

		<td><?php echo $t['nom_l'];?></td>
		<td><?php echo $t['type_l'];?></td>
			<td><?php echo $t['capacité'];?></td>
	<!--		<td><a href="modifier_l.php?id=<?php echo $t['id_l'];?>&n=<?php echo $t['nom_l'];?>&c=<?php echo $t['capacité'];?>&t=<?php echo $t['type_l'];?>">modifier</a></td>
-->
<td ><a id="ml" href="modifier_l.php?id=<?php echo $t['id_l'];?>&n=<?php echo $t['nom_l'];?>&c=<?php echo $t['capacité'];?>&t=<?php echo $t['type_l'];?>"><i class="fa fa-edit"></i> modifier</a>
	<button id="s" type="button" onclick="delete_r('delete_l.php?id=',<?php echo $t['id_l'];?> )"><i class="fa fa-times"></i>supprimer</button></td>
	<script type="text/javascript" src="g.js"></script>
		<?php }
  ?></tr>
</div>
</div>
</div>
<script type="text/javascript" src="search.js"></script>
</body>
</html>
