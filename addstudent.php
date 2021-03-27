<!DOCTYPE html>
<html>
<head>
	<title>etudiant-ajouter </title>
<!--<script type="text/javascript"  src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'>
</script>
 <script type="text/javascript"  src='retreive.js'></script>
-->
<link rel="stylesheet" href="ze1.css">

	<style type="text/css">
    .sd{
       display: inline-block;
  
    width: 20px;
 
    }
  
	  .op{
		  color: black;
	   }
	</style>
</head>
<body>
	<?php require_once 'dash.php'; ?>
 <div class="op">
	 <div class="w">
   <h1>ajouter etudiant</h1>
   <form method="POST" action="controller.php">
  <div class="tab">
		<label>numero d'inscription</label>
    <input type="text" name="num_ins" placeholder="Entrer numero d'inscription" required pattern="[0-9]+">
   <label>nom</label>
   <input type="text" name="nom" placeholder="Entrer nom" required pattern="[a-zA-Z]+">
   <label>prenom</label>
   <input type="text" name="prenom" placeholder="Entrer prenom" required pattern="[a-zA-Z]+">
   <label>N_Tel</label>
   <input type="text" name="N_Tel" placeholder="Entrer N_Tel" required pattern="[0-9]+">
   <label>email</label>
   <input type="email" name="email" placeholder="Entrer email" required pattern=".+@[a-zA-Z]+\.[a-zA-Z]+">

    <label>chef de groupe</label>
 
  <div>
     <br>
   <input class="sd" type="radio" name="chef"  value="oui" required>
   <label class="sd">oui</label>
   <input class="sd" type="radio" name="chef" value="non" required>
   <label class="sd">non</label>
 </div>
  </div>

  <?php
  require_once 'model.php';
  $q=$bd->query("select * from niveau_de_formation");
  ?>
  <label>niveau de formation</label>
 <select id="level" name="level" onchange="ajax_request(event,'section','ids','noms',false,false)" required>
	 <option value="">
selectionnez le niveau de formation
	 </option>
  	<?php
  while ($t=$q->fetch()){
    ?>
    <option value= <?php echo $t['id_n'];?>>

    	<?php echo $t['nom_n']."-". $t['specialité']; ?>

    </option>
  <?php }
  ?>
</select>
 <label>section</label>
<select id="section" name="section" onchange="ajax_request(event,'groupe','idG','nomG',true,false)" required>
    <option value="">
selectionnez le section
    </option>
</select>


<label>groupe</label>
<select id="groupe" name="group" required>
    <option value="">
selectionnez le groupe
    </option>
</select>


   <input type="submit">

   </form>
 </div>
 </div>
<script type="text/javascript" src="sd.js"></script>

</body>
</html>
