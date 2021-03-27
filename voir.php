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
 	   $q=$bd->query("SELECT * FROM `module` INNER join niveau_de_formation on module.id_n=niveau_de_formation.id_n INNER join horaire_examen ON horaire_examen.id_h=module.id_h where module.id_n='".$_GET['d']."' and module.id_h!=0");
 	   $wx=$bd->query("select count(*) as c from module where id_n='".$_GET['d']."' and id_h = 0");
 	   $fh = $wx->fetch();
 

		?>
			<div class="io">
		<a style="color: blue;" href="emploi_v1.php"><i class="fa fa-long-arrow-left"></i> précédent : liste de plannings</a>
		<h2>emploi de temp</h2>
	 <hr>
	 <?php
	   if($fh['c'] != 0){
	 ?>
	 <a id="rsw" href="ajouter_ho.php?d=<?php echo $_GET['d'];?>"><i class="fa fa-plus"></i> ajouter les horaires</a>
	 <?php
	 }
	 ?>
	 <table border="1" width="100%">
	 	<tr>
	 	     	<th>date</th>
				  <th>heure debut</th>
					<th>heure fin</th>
					<th>module</th>
					<th>action</th>
	 	</tr>
		<tr>
			<?php


		 while ($t=$q->fetch()){
          	   $v1=$bd->query("select count(*) as c from effectuer where id_h =".$t['id_h']);
 	    $v2=$bd->query("select count(*) as c from surveiller where id_h =".$t['id_h']);
 	      	   $v1 = $v1->fetch();
 	    		 ?>
			<tr>
			<td><?php echo $t['date_h'];?></td>
			<td><?php echo $t['heure_debut'];?></td>
				<td><?php echo $t['heure_fin'];?></td>
						<td><?php echo $t['nom_module'];?></td>
			<td>
				<?php
				if ($v1['c'] != 0) {
					?>
						<a href="planning_salle.php?id=<?php echo $t['id_h']; ?>&de=<?php echo $_GET['d'];?>&n=<?php echo $t['nom_n']; ?>&s= <?php echo $t['specialité']; ?>" style="color: blue;text-decoration: underline;">voir planning de salle</a>
					<?php
				}
				?>
			
   <a id="ml" href="modifier_ho.php?id=<?php echo $t['id_h']; ?>&m=<?php echo $t['nom_module']; ?>&im=<?php echo $t['id_module']; ?>&hd=<?php echo $t['heure_debut'];?>&d=<?php echo $t['date_h'];?>&de=<?php echo $_GET['d'];?>"><i class="fa fa-edit"></i> modifier</a>
	 <button id="s" type="button" onclick="delete_r('delete_ho.php?idh=','<?php echo $t['id_h']."&idm=".$t['id_module']."&de=".$_GET['d'];?>' )"><i class="fa fa-times"></i>supprimer</button></td>
 	<script type="text/javascript" src="g.js"></script>
			</td>
			<?php
		} ?>
		</tr>
	 </table>
	 </div>
	</body>
</html>
