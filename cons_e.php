<!DOCTYPE html>
<html >
	<head>
		<meta charset="utf-8">
		<title>gerer planning-emploi de temp</title>
		<link rel="stylesheet" type="text/css" href="ze1.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

		<style>
			.op{
			color: black;
		}
		</style>
	</head>
	<body>
		<div style="display:block;">
		<?php require_once 'd2.php'; ?>
		</div>





			<?php
			require_once 'model.php';
 	   $q=$bd->query("SELECT id_n FROM `module` WHERE id_h!='null' GROUP BY id_n");
if ($q->rowCount()==0) {
	?>

<h2>pas de planning pour l'instant</h2>

	<?php
}else {
?>
<div class="op">
<div class="w">
<form  action="cons_pl.php" method="post">
	<label>niveau de formation</label>
		<select class="" name="idn">


<?php
			 while ($t=$q->fetch()){
				  $r=$bd->query("SELECT * FROM `niveau_de_formation` WHERE id_n='".$t['id_n']."'");
	     $tz=$r->fetch();
			 ?>

        <option value="<?php echo $tz['id_n']; ?>"><?php echo $tz['nom_n']."-".$tz['specialité'];?></option>


				<?php
			} ?>
	</select>
<input type="submit" name="sub" >


</form>
			<?php }
			 ?>
</div>

 </div>
	</body>
</html>
