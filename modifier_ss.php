<!DOCTYPE html>
<html>
<head>
	<title>section-modifier</title>
<!--   <script type="text/javascript"  src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'>
</script> -->
<link rel="stylesheet" href="ze1.css">
<style>
.op{
	color: black;
}
</style>
<!-- <script type="text/javascript"  src='r.js'></script>
 --></head>
<body>
	<?php require_once 'dash.php'; ?>
 <div class="op">
	 <div class="w">
<h2>modifier section</h2>
<form method="post" action="ss.php?id=<?php echo $_GET['ids'];?>">
	<label>nom de section</label>
	<input type="text" name="nom" required pattern="[A-Za-z]+"
  value="<?php echo $_GET['ns'];?>">


		<label>niveau de formation</label>
	<select name="level" id="level" >

  <option value="<?php echo $_GET['n'];?>">
      <?php echo $_GET['nn']."-".$_GET['se'];?>
  </option>

		   <?php
        require_once 'model.php';
         $q=$bd->query("select * from niveau_de_formation where id_n !=". $_GET['n']);
        ?>
     <?php
     while ($t=$q->fetch()){
      ?>
  <option value= "<?php echo $t['id_n'];?>">

    	<?php echo $t['nom_n']."-". $t['specialité']; ?>
  </option>
     <?php } ?>
</select>

   
	<input type="submit" name="submit">

</form>
</div>
</div>
<script type="text/javascript" src="sd1.js"></script>

</body>
</html>
