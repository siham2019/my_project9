<!DOCTYPE html>
<html >
	<head>
		<meta charset="utf-8">
		<title>gerer planning-emploi de temp</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="ze1.css">
	<style>
	.op {
	  color: black;
	}
	</style>
	</head>
	<body>
		<?php require_once 'dash.php'; ?>
 	  <div class="op">
				<a href="voir.php?d=<?php echo $_GET['d'];?>"><i class="fa fa-long-arrow-left"></i> précédent : emploi de temp </a>
         <div class="w">
		<?php
		require_once 'model.php';?>

		<h2>ajouter horaire</h2>
	 <form class="" action="ajouter_ho.php?d=<?php echo $_GET['d'];?>" method="post">
		  <label>Module</label>
 		 <select name="m" required>
 			  	<option>choisir le module</option>



 		           	<?php
 	            	$wx=$bd->query("select * from module where id_n='".$_GET['d']."' and id_h = 0");

 			            ?>
 		            <?php
		               while ($z=$wx->fetch()) {
		         		 ?>




			   <option value="<?php echo $z['id_module'];?>">
		         <?php echo $z['nom_module'];?>
		     </option>

			       <?php
		            }

		          ?>
		</select>


		<label>heure  </label>
		<select name="hd"  required>
			<option value="08:30">8:30-10:00</option>
			<option value="10:00">10:00-11:30</option>
			<option value="11:30">11:30-13:00</option>
			<option value="13:00">13:00-14:30</option>
		</select>

		<label>date </label>
		<input type="date" name="d" required>

		<input style="color:white;" type="submit" name="submit" value="valider">


	 </form>

<?php

	if (isset($_POST['submit']))
{
	$io = true;
	$e = $bd->query("SELECT * FROM `module` inner join horaire_examen on horaire_examen.id_h=module.id_h AND module.id_h!=0 WHERE module.id_n=".$_GET['d']);
		$y=$_POST['hd'];
	if ($e->rowCount()!=0) {
          
		while ($jj = $e->fetch()) {
           
		  if ($jj['date_h'] ==$_POST['d']) {
		  	if (strtotime($jj['heure_debut'])  == strtotime($y) ||strtotime($jj['heure_debut'])  <= strtotime($y) &&  strtotime($jj['heure_fin'])  > strtotime($y)) {
          
		     $io = false;
		  	?>
		  	<script type="text/javascript">
		  		alert("heure de debut existe deja ou inclut dans une heure dans le meme niveau de formation. veuillez le changer");
		  	</script>
		  	<?php	
		  	}
		  }
		}
	}

	if($io){
		$hj=date("H:i",strtotime('+1 hour +30 minutes',strtotime($y)));
	
		$q=$bd->query("INSERT INTO `horaire_examen` (`id_h`, `date_h`, `heure_debut`, `heure_fin`)  VALUES (NULL,'".$_POST['d']."','".$_POST['hd']."','".$hj."')");
	
	$q=$bd->query("UPDATE `module` SET `id_h` = LAST_INSERT_ID() WHERE `module`.`id_module` = '".$_POST['m']."'");
    }




}







 ?>







</div>
</div>


	</body>
</html>
