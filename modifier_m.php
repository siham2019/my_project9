<!DOCTYPE html>
<html>
<head>
	<title>module-modifier</title>
	<link rel="stylesheet" href="ze1.css">
	<style>
	.op{
		color: black;
	}
	</style>
</head>
<body>
	<?php
  require_once 'model.php';
  $q=$bd->query("select * from niveau_de_formation where id_n!=".$_GET['id_n']);
  ?>
	 <?php require_once 'dash.php'; ?>
	<div class="op">
		<div class="w">
<h1>modifier module</h1>
<form method="post" action="update_m.php?id=<?php echo $_GET['id'] ; ?>">
	<label>nom de module</label>

	<input type="text" name="nom_module" value="<?php echo $_GET['m'] ; ?>
" required pattern="[a-zA-Z'0-9 ]+">
		<label>niveau de formation</label>
	<select name="level">
		 <option value= <?php echo $_GET['id_n'];?>><?php echo $_GET['n']."-". $_GET['s']; ?></option>
  <?php
  while ($t=$q->fetch()){
    ?>
    <option value= <?php echo $t['id_n'];?>>

    	<?php echo $t['nom_n']."-". $t['specialité']; ?>

    </option>
  <?php } ?>
	</select>
	<input type="submit">
</div>
</div>
</body>
</html>
