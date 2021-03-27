<!DOCTYPE html>
<html>
<head>
	<title>ajouter etudiant</title>
	<style type="text/css">
		input{
			display: block;
		}
	</style>
</head>
<body>
   <h1>ajouter etudiant</h1>
   <form method="POST" action="controller.php">
  <div class="tab">
   <label>nom</label>
   <input type="text" name="nom" required pattern="[a-zA-Z]+">
   <label>prenom</label>
   <input type="text" name="prenom" required pattern="[a-zA-Z]+">
   <label>N_Tel</label>
   <input type="text" name="N_Tel" required pattern="[0-9]+">
   <label>email</label>
   <input type="email" name="email" required pattern=".+@[a-zA-Z]+\.[a-zA-Z]+">
  </div>

  <?php
  require_once 'model.php';
  $q=$bd->query("select * from niveau_de_formation");
  ?>
 <div class="tab"> niveau de formation
 <select>
  	<?php
  while ($t=$q->fetch()){
    ?>
    <option style="width: 50%;">

    	<?php echo $t['nom_n']."-". $t['specialité'];?>
    	
    </option>
  <?php }
  ?>
</select>
</div>
  <button>Submit</button>
   <input type="reset">

   </form>
</body>
</html>