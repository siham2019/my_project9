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

		<?php
		require_once 'model.php';?>
		<a href="voir.php?d=<?php echo $_GET['de'];?>"><i class="fa fa-long-arrow-left"></i> précédent : emploi de temp </a>
   <div class="w">
		<h2>modifier horaire</h2>
	 <form class="" action="modifier_ho.php?de=<?php echo $_GET['de'];?>&id=<?php echo $_GET['id'];?>&idm=<?php echo $_GET['im'];?>&m=<?php echo $_GET['m'];?>" method="post">
		  <label>Module</label>
			<p><?php echo $_GET['m'];?></p>
			<!--
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

-->

		<label>heure de debut </label>
		<select name="hd"  required>
			<option value="08:30">8:30-10:00</option>
			<option value="10:00">10:00-11:30</option>
			<option value="11:30">11:30-13:00</option>
			<option value="13:00">13:00-14:30</option>
		</select>

		<label>date </label>
		<input type="date" name="dd" value="<?php echo $_GET['d'];?>">

		<input style="color:white;" type="submit" name="submit" value="valider">


	 </form>

<?php

 
	if (isset($_POST['submit']))
{
	$io = true;
	$e = $bd->query("SELECT * FROM `module` inner join horaire_examen on horaire_examen.id_h=module.id_h AND module.id_h!=0 WHERE module.id_n=".$_GET['de']." and module.id_module != ".$_GET['idm']);

		$y=$_POST['hd'];
	
	if ($e->rowCount()!=0) {
         
		while ($jj = $e->fetch()) {
           
		  if ($jj['date_h'] ==$_POST['dd']) {
		  	if (strtotime($jj['heure_debut'])  == strtotime($y) ||strtotime($jj['heure_debut'])  <= strtotime($y) &&  strtotime($jj['heure_fin'])  > strtotime($y)) {
          
		     $io = false;
	echo "heure de debut existe deja ou inclut dans <br>une heure de meme niveau de formation . <br> veuillez le changer";
		  
		  	}
		  }
		}
	}

	if($io){

	   $hj=date("H:i",strtotime('+1 hour +30 minutes',strtotime($y)));
	
	    $q=$bd->query("UPDATE `horaire_examen` SET `heure_debut` = '".$_POST['hd']."', `heure_fin` = '".$hj."',`date_h` = '".$_POST['dd']."' WHERE `horaire_examen`.`id_h` = ".$_GET['id']);
	    if ($q) {
	header('Location: voir.php?d='.$_GET['de']);
     }
    }
	

}







 ?>



</div>
</div>








	</body>
</html>
