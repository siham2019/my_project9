<!DOCTYPE html>
<html>
<head>
	<title>gerer ressource-etudiant</title>
	<link rel="stylesheet" type="text/css" href="pA.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

 <?php require_once 'dash.php'; ?>
 <div class="io">
	 <h2>liste des etudiants</h2>
	 <hr>
	 <div class="df">
	 	<label>Rechercher : </label>
	 	 <input type="text" id="myInput" onkeyup="myFunction()" placeholder=" entrer numero d'inscription ">
	      <a href="addstudent.php" id="rsw"><i class="fa fa-plus"></i>ajouter</a>
	 </div>
	 

	 <table border="1" id="myTable">
	 	<tr>
	 		<th>numero d'inscription</th>
	 		<th>nom</th>
	 		<th>prenom</th>
	 		<th>N-Tel</th>
	 		<th>email</th>
	 		<th>groupe</th>
	 		<th>section</th>
	 		<th>niveau de formation</th>
	 		<th>specialité</th>
					<th id="at">action</th>
	 	</tr>
	 	 <?php
	   require_once 'model.php';
	   $q=$bd->query("select * from etudiant");

	   while ($t=$q->fetch()){
	   ?>
	   	<tr>
	 		<td><?php echo $t['num_ins'];?></td>
	 		<td><?php echo $t['nome'];?></td>
	 		<td><?php echo $t['prenome'];?></td>
	 		<td><?php echo $t['N_Tele'];?></td>
	 		<td><?php echo $t['emaile'];?></td>
	 		<td><?php $c=$bd->query("select nomG,id_section from groupe where idG=".$t['idG']);
	 		$v=$c->fetch();
	 		 echo $v['nomG'];?></td>


	 		 <td><?php $f=$bd->query("select nom_section,id_n from section where id_section=".$v['id_section']);
	 		$h=$f->fetch();
	 		 echo $h['nom_section'];?></td>



	 		  <td><?php $j=$bd->query("select nom_n,specialité from niveau_de_formation where id_n=".$h['id_n']);
	 		$l=$j->fetch();
	 		 echo $l['nom_n'];?></td>
	 		  <td><?php
	 		 echo $l['specialité'];?></td>

	 		<td><a id="ml" href="modifier.php?e=<?php echo $t['num_ins']; ?>&n=<?php
	 		 echo $l['nom_n'];?>&se=<?php
	 		 echo $l['specialité'];?>&id=<?php echo $h['id_n'];?>"><i class="fa fa-edit"></i>modifier</a>
			 <button id="s" type="button" onclick="delete_r('delete.php?id=',<?php echo $t['num_ins'];?>)"><i class="fa fa-times"></i>supprimer</button></td>
	 	<script type="text/javascript" src="g.js">

	 	</script>
	 	</tr>
	 <?php } ?>
	 </table>
 </div>

<script type="text/javascript" src="search.js"></script>
</body>
</html>
