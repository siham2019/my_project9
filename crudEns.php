

<!--       Cbn            -->

<!DOCTYPE html>
<html>
<head>
	<title>gerer ressource-enseignant</title>
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
<h1>Liste des enseignants</h1>
<hr>
 <div class="df">
	 	<label> Rechercher : </label>
	 	 <input type="text" id="myInput" onkeyup="myFunction()" placeholder=" entrer code d'enseignant ">
	 <a id="rsw" href="ajout_ens.php"><i class="fa fa-plus"></i>ajouter</a>


	 </div>
<table border="1" width="100%" id="myTable">
	<tr>

		<th>Code Enseignant</th>
		<th>nom</th>
        <th>prenom</th>
        <th>N_Telephone</th>
        <th>email</th>
        <th>grade</th>
          <th>responsable de module</th>
	<th id="at">action</th>

	</tr>
	 <?php
  require_once 'model.php';
  $q=$bd->query("select * from enseignant");
$ty = array();
$sy = array();
  while ($t=$q->fetch()){

  ?>
  <tr>
	<td><?php echo $t['id_e'];?></td>
	<td><?php echo $t['nom_e'];?></td>
	<td><?php echo $t['prenom_e'];?></td>
	<td><?php echo $t['N_Tel'];?></td>
	<td><?php echo $t['email'];?></td>
	<td><?php echo $t['grade'];?></td>
	<td><?php
	 $dj=$bd->query("select * from module where id_e='".$t['id_e']."'");
	 $r=$bd->query("select count(*) as s from module where id_e='".$t['id_e']."'");
	$g=$r->fetch();
       if ($g['s'] == 0) {
           echo "/";
           array_push($ty, "/");
           array_push($sy, "NULL");
        }
      else{
        while ($g=$dj->fetch()) {
         echo $g['nom_module'].","; 
         array_push($ty, $g['nom_module']);
          array_push($sy, $g['id_module']);
        }
      }
	?></td>


		<td>
             <a id="ml" href="modifier_ens.php?id=<?php echo $t['id_e'];?>&ne=<?php echo $t['nom_e'];?>&p=<?php echo $t['prenom_e'];?>&tn=<?php echo $t['N_Tel'];?>&e=<?php echo $t['email'];?>&g=<?php echo $t['grade'];?>"> <i class="fa fa-edit"></i>modifier</a>

			<button id="s" onclick="delete_r('deleteEns.php?id=','<?php echo $t['id_e'];?>')">
				<i class="fa fa-times"></i>supprimer
			</button>
		</td>
		<?php }
  ?></tr>
	</div>
	</div>
	</div>
	<script type="text/javascript" src="search.js"></script>

	<script type="text/javascript" src="g.js"></script>
</body>
</html>
