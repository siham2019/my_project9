<!DOCTYPE html>
<html>
<head>
	<title>modifier-enseignant</title>
  <script type="text/javascript"  src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'>
</script>
<link rel="stylesheet" href="ze1.css">
<style>
.op{
	color: black;
}
</style>
<script type="text/javascript"  src='r.js'></script>
</head>
<body>

<?php require_once 'dash.php'; ?>
 <div class="op">
	 <div class="w">
   <h1>modifier enseignant</h1>
   <?php

  require_once 'model.php';
 

  ?>
   <form method="POST" action="mEns.php?id=<?php echo $_GET['id']; ?>">
  <div class="tab">
		<label>code d'enseignant</label>
    <input type="text" name="cin" required pattern="[0-9a-zA-Z]+" value="<?php echo $_GET['id']; ?>">

   <label>nom</label>
   <input type="text" name="nom" required pattern="[a-zA-Z]+" value="<?php echo $_GET['ne']; ?>">
   <label>prenom</label>
   <input type="text" name="prenom" required pattern="[a-zA-Z]+" value="<?php echo $_GET['p']; ?>">
   <label>N_Tel</label>
   <input type="text" name="N_Tel" required pattern="[0-9]+" value="<?php echo $_GET['tn']; ?>">
   <label>email</label>
   <input type="email" name="email" required pattern=".+@[a-zA-Z]+\.[a-zA-Z]+" value="<?php echo $_GET['e']; ?>">
 
  </div>



    <label > Grade </label>
    <select id="grade" name="grade"  required>
        <option value="M A/B" >M A/B</option>
          <option value="M A/A">M A/A</option>
        <option value="M C/A">M C/A</option>
        <option value="M C/B">M C/B</option>
        <option value="vacataire">vacataire</option>
    </select>
     <label > responsable de module </label>
    <select id="grade" name="res[]"  multiple required>
        
        <?php
            $w=$bd->query("SELECT * FROM `module` WHERE `id_e`='".$_GET['id']."'");
            $bd->query( "UPDATE `module` SET `id_e` = NULL WHERE `module`.`id_e` ='".$_GET['id']."'");
        
            if ($w->rowCount()==0) {
               ?>
               <option value="NULL" selected>/</option>
               <?php
            }
            else{
              ?>
               <option value="NULL" >/</option>
                <?php
                while ($p=$w->fetch()) {
                    ?>
                  <option value="<?php echo $p['id_module']; ?>" selected><?php echo $p['nom_module']; ?></option>
                    <?php
                  }
            }
          $wx=$bd->query("SELECT * FROM `module` WHERE`id_e` is null");
          while ($h=$wx->fetch()) {
            ?>
             <option value="<?php echo $h['id_module']; ?>">
              <?php echo $h['nom_module']; ?>

             </option>
            <?php
          }
        ?>
    </select>
  <div class="btn">
    <input type="submit" name="submit">
  </div>
	</form>
</div>
</div>
<script type="text/javascript" src="qj.js">
  function_name("<?php echo $_GET['g']; ?>","grade");
</script>
<script type="text/javascript" src="ww.js"></script>
</body>
</html>
