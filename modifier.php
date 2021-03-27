<!DOCTYPE html>
<html>
<head>
	<title>etudiant-modifier</title>
<!--<script type="text/javascript"  src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'>
</script>
<script type="text/javascript"  src='r.js'></script>-->
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
   <h1>modifier etudiant</h1>
   <?php

  require_once 'model.php';
  $q=$bd->query("select * from etudiant where num_ins=".$_GET['e']);
$t=$q->fetch();

  ?>
   <form method="POST" action="update.php?id=<?php echo $t['num_ins']; ?>">
  <div class="tab">
		<label>numero d'inscription</label>
    <input type="text" name="num_ins" required pattern="[0-9]+" value="<?php echo $t['num_ins']; ?>">

   <label>nom</label>
   <input type="text" name="nom" required pattern="[a-zA-Z]+" value="<?php echo $t['nome']; ?>">
   <label>prenom</label>
   <input type="text" name="prenom" required pattern="[a-zA-Z]+" value="<?php echo $t['prenome']; ?>">
   <label>N_Tel</label>
   <input type="text" name="N_Tel" required pattern="[0-9]+" value="<?php echo $t['N_Tele']; ?>">
   <label>email</label>
   <input type="email" name="email" required pattern=".+@[a-zA-Z]+\.[a-zA-Z]+" value="<?php echo $t['emaile']; ?>">
  </div>
	<label>niveau de formation</label>
 <select id="level" name="level" onchange="ajax_request(event,'section','ids','noms',false,false)">
  
    <option value=" <?php echo $_GET['id'];?>">
      <?php echo $_GET['n']."-".$_GET['se']; ?>
    </option>
        <?php
         $y=$bd->query("select * from niveau_de_formation where id_n !=".$_GET['id']);

  while ($n=$y->fetch()){
    ?>
    <option value= "<?php echo $n['id_n'];?>">

      <?php echo $n['nom_n']."-". $n['specialité']; ?>

    </option>
  <?php }
  ?>
</select>


<?php
          //for groupe de l'etudiant for 1st option

         $w=$bd->query("select id_section,nomG from groupe where idG =".$t['idG']);
         $er=$w->fetch();

         //***********************************

         //for section de l'etudiant for 1st option

         $z=$bd->query("select nom_section from section where id_section =".$er['id_section']);
        $sr=$z->fetch();
         //***********************************


    ?>
		<label>section</label>
<select id="section" name="section" onchange="ajax_request(event,'groupe','idG','nomG',true,false)">

    <option value="<?php echo $er['id_section'];?>">
<?php echo $sr['nom_section'];?>
    </option>
        <?php
         $x=$bd->query("select * from section where id_section !=".$er['id_section']." and id_n =".$_GET['id']);

  while ($b=$x->fetch()){
    ?>
    <option value= "<?php echo $b['id_section'];?>">

      <?php echo $b['nom_section']; ?>

    </option>
  <?php }
  ?>
</select>

<label>groupe</label>
<select id="groupe" name="group">
  <option value= "<?php echo $t['idG'];?>">
      <?php echo $er['nomG']; ?>
  </option>
       <?php
         $dg=$bd->query("select * from groupe where idG!=".$t['idG']." and id_section =".$er['id_section']);

  while ($s=$dg->fetch()){
    ?>
    <option value= "<?php echo $s['idG'];?>">

      <?php echo $s['nomG']; ?>

    </option>
  <?php }
  ?>
</select>
<input type="submit">
   </form>
 </div>
 </div>
 <script type="text/javascript" src="sd1.js"></script>

</body>
</html>
