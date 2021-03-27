<!DOCTYPE html>
<html>
<head>
	<title>groupe-modifier</title>
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
<h2>modifier groupe</h2>
<form method="post" action="m.php?id=<?php echo $_GET['id'];?>">
	<label>numero de groupe</label>
	<input type="text" name="numero" required pattern="[0-9]+"
  value="<?php echo $_GET['ng'];?>">


		<label>niveau de formation</label>
	<select name="level" id="level" onchange="ajax_request(event,'section','ids','noms',false,true)">

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

    <label>section</label>

  <select id="section" name="section">
    <option value="<?php echo $_GET['s'];?>">
      <?php echo $_GET['ns'];?>
    </option>

       <?php

       $e=$bd->query("select * from section where id_section !=". $_GET['s']." and id_n =".$_GET['n']);
      ?>
     <?php
       while ($r=$e->fetch()){
       ?>
   <option value= "<?php echo $r['id_section'];?>">

        <?php echo $r['nom_section']; ?>

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
