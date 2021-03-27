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
		<div style="display:block;">
		<?php require_once 'd2.php'; ?>
		</div>
			<div class="io">
		<h2>emploi de temp</h2>
	 <hr>
	 <div id="emploi">
	 <table border="1" width="100%" >
	 	<tr>
	 	     	<th>date</th>
				  <th>heure debut</th>
					<th>heure fin</th>
					<th>module</th>

	 	</tr>

			<?php
			require_once 'model.php';
			if (isset($_POST['idn'])) {
				$q=$bd->query("SELECT * FROM `module` INNER join niveau_de_formation on module.id_n=niveau_de_formation.id_n INNER join horaire_examen ON horaire_examen.id_h=module.id_h where module.id_n='".$_POST['idn']."' and module.id_h!=0");

 			 while ($t=$q->fetch()){

 			 ?>
 				<tr>
 				<td><?php echo $t['date_h'];?></td>
 				<td><?php echo $t['heure_debut'];?></td>
 					<td><?php echo $t['heure_fin'];?></td>
 							<td><?php echo $t['nom_module'];?></td>
          </tr>
 				<?php
 			} 	} ?>.



	 </table>
	 </div>
	 <div style="display:flex;justify-content:center;margin:20px;">
		 <!-- <button  id="s" style="border:none;"><i class="fa fa-file-pdf-o"></i> enregistrer en pdf</button> -->
			<button id="ml" onclick="imprimer('emploi')"><i class="fa fa-print"></i> imprimer</button>
	 </div>

	 </div>
	 <script type="text/javascript" src="vb.js"></script>

	</body>
</html>
