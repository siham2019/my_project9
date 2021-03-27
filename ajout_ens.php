
<!DOCTYPE html>
<html>
<head>
	<title>enseignant-ajouter </title>
<script type="text/javascript"  src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'>
</script>
<script type="text/javascript"  src='retreive.js'></script>
<link rel="stylesheet" href="ze1.css">

	<style type="text/css">
	.op{
		color: black;
	}
	</style>
</head>
<body>
	<?php require_once 'dash.php'; ?>



 <div class="op">
	 <div class="w">
   <h1> Ajouter enseignant </h1><br><br>
   <form method="POST" action="ajout_ens.php">
  <div class="tab">
		<label>CIN  </label>
    <input type="text" name="cin" placeholder="Entrer votre N CIN " required pattern="[a-zA-Z0-9]+">
   <label>Nom </label>
   <input type="text" name="nom" placeholder="Entrer votre nom" required pattern="[a-zA-Z]+">
   <label>Prenom</label>
   <input type="text" name="prenom" placeholder="Entrer votre prenom" required pattern="[a-zA-Z]+">
   <label>N_Tel   </label>
   <input type="text" name="N_Tel" placeholder="Entrer votre N_Tel" required pattern="[0-9]+">
   <label>Email </label>
   <input type="email" name="email" placeholder="Entrer votre email" required pattern=".+@[a-zA-Z]+\.[a-zA-Z]+">
   
	<label >GRADE</label>                 
    <select id="grade" class="form-control" name="grade" required>
    	<option value="">Choisir une</option>
    	 <option value="M A/B" >M A/B</option>
          <option value="M A/A">M A/A</option>
        <option value="M C/A">M C/A</option>
        <option value="M C/B">M C/B</option>
        <option value="vacataire">vacataire</option>
    </select>
  </div>

   
 		           	<?php
 		           		require_once 'model.php';
 	            	$wx=$bd->query("SELECT * FROM `module` WHERE`id_e` is null");

 			            ?>
 			            <label >Responsable de module</label> 
 <select   name="res[]" multiple required>
  <option value="NULL">/</option>
 		            <?php
		               while ($z=$wx->fetch()) {
		         		 ?>

    
    	 <option value="<?php echo $z['id_module']; ?>" ><?php echo $z['nom_module']; ?></option>
       
   
<?php
}
    ?>
 </select>
<?php 
         if (isset($_POST['submit'])) {
		     $cin = $_POST['cin'];
            $nom_e = $_POST['nom'];
            $prenom_e = $_POST['prenom'];
            $email = $_POST['email'];
            $N_Tel = $_POST['N_Tel'];
            $grade = $_POST['grade'];
            $module =  $_POST['res'];
            $id="EN".$cin;
            $pass=str_shuffle("EN".$cin.$nom_e);
             $bd->query("INSERT INTO `login`(`identifiant`, `pass`) VALUES ('".$id."','".$pass."')");
             require 'tutorial1.php';
       emailPass($nom_e,$prenom_e,$id,$pass,$email);
            $a = $bd->query("INSERT INTO `enseignant` (`id_e`, `nom_e`, `prenom_e`, `email`, `N_Tel`, `grade`,`identifiant`) VALUES ('".$cin."', '".$nom_e."', '".$prenom_e."', '".$email."', '".$N_Tel."', '".$grade."','".$id."')");
         foreach ($module as $n) {
             $a = $bd->query("UPDATE `module` SET `id_e` = '".$cin."' WHERE `module`.`id_module` = ".$n);
        
             
             }
       
              
            }	
?>

   <input type="submit" name="submit">  
</form>
 </div>
 </div>

</body>
</html>