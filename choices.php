<!DOCTYPE html>
<html>
<head>
	<title></title>
		

<link rel="stylesheet" type="text/css" href="qz.css">
<style type="text/css">
	select{
  padding: 7px;
border-radius: 6px;
width: 150px;

margin-bottom: 10px;

}
</style>
</head>
<body>
	<div class="modal">
  <form method="post" action="re.php" class="rt">

	<?php  require_once 'model.php'; 
 	  ?>
 	  <label>choisir la date d'examen</label>
 	<select name="id">
 	  <?php
 	   $qsa=$bd->query("SELECT * FROM `horaire_examen` where id_h!=0 GROUP by date_h ORDER BY `date_h` DESC");

		 while ($ert=$qsa->fetch()){
	?>
	<option value="<?php echo $ert['date_h']; ?>"><?php echo $ert['date_h']; ?></option>
		<?php } ?>
	</select>
	<div>
	  <input class="th" type="submit">
	  <button class="fh" onclick="hide()" type="reset" >annuler</button>
	</div>
  </form>
</div>
	<script type="text/javascript" src="sh.js">
    </script>
    	<script type="text/javascript" src="si.js">
    </script>
</body>
</html>