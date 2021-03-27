<!DOCTYPE html>
<html >
	<head>
		<meta charset="utf-8">
		<title>gerer planning-emploi de temp</title>
		<link rel="stylesheet" type="text/css" href="pA.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		.io{
			color: black;
		}
		</style>
	</head>
	<body>
		 <?php require_once 'dash.php';			
		 require_once 'model.php';
		 require 'choices.php';
$sg=$bd->query("select count(*)  as c from niveau_de_formation inner join module on module.id_n = niveau_de_formation.id_n and module.id_h = 0 group by niveau_de_formation.id_n"); 
         $ff = $sg->fetch();
		 ?>

		 <div class="io">
		<h2>liste des plannings disponibles</h2>
	 <hr>
	 <?php 
      if ($ff['c'] != 0) {
      	?>
      	<a id="rsw" href="ajouter_pl.php?d=0"><i class="fa fa-plus"></i> ajouter planning</a>
      	<?php
      }

	 ?>
      
	  <button id="rsw" onclick="showP()" style="background-color: brown;"> auto-affecter dans les salles</button>
	  <button style="float: right;padding: 7px;background-color: white;color: blue;text-decoration: underline;border:none;" type="button" onclick="delete_r('supP.php','')"> supprimer planning de salle</button>
	 <table border="1" >
	 	<tr>
	 	     	<th>niveau de formation</th>
				  <th>specialité</th>
					<th>action</th>
	 	</tr>
		<tr>
			<?php
 	   $q=$bd->query("SELECT id_n FROM `module` WHERE id_h!='null' GROUP BY id_n");

		 while ($t=$q->fetch()){
			  $r=$bd->query("SELECT * FROM `niveau_de_formation` WHERE id_n='".$t['id_n']."'");
     $tz=$r->fetch();
		 ?>
			<tr>
			<td><?php echo $tz['nom_n'];?></td>
			<td><?php echo $tz['specialité'];?></td>
			<td>
   <a id="ml" href="voir.php?d=<?php echo $t['id_n']; ?>"><i class="fa fa-eye"></i> voir planning</a>
	 <button id="s" type="button" onclick="delete_r('sup.php?id=',<?php echo $tz['id_n'];?>)"><i class="fa fa-times"></i>  supprimer</button></td>

			</td>
			<?php
		} ?>
		</tr>
	 </table>
 </div>
 	 <script type="text/javascript" src="g.js"></script>

	</body>
</html>
