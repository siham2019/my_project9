<!DOCTYPE html>
<html>
<head>
	<title>planning de salle</title>
			<link rel="stylesheet" type="text/css" href="pA.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
		.io{
			color: black;
			padding: 20px;
		}
   .io > button{
    background-color: blue;
    border:none;
    float: right;
    padding: 10px;
   }
  
		</style>
</head>
<body>
	<?php require_once 'dash.php';
     require_once 'model.php';
      	   $q=$bd->query("SELECT * FROM `surveiller`inner join enseignant on enseignant.id_e=surveiller.id_e where surveiller.id_h =".$_GET['id']);
      	  $sd=$bd->query("SELECT * FROM `effectuer`inner join locaux on locaux.id_l=effectuer.id_l WHERE effectuer.id_h =".$_GET['id']);
	?>
<div class="io">
    <button onclick="imprimer('im')"> <i class="fa fa-print"></i> imprimer</button>

    <button onclick="delete_r('delete_sap.php?idh=','<?php echo $_GET['id'];?>&d=<?php echo $_GET['de'];?>&t=1')" style="background-color: red"><i class="fa fa-times"></i>  supprimer</button>

      <a style="color: blue;" href="voir.php?d=<?php echo $_GET['de'];?>"><i class="fa fa-long-arrow-left"></i> empoi de temp</a>

<div id="im">
  <h2><?php echo $_GET['n'].'-'.$_GET['s']; ?></h2>
<?php

while ($t=$sd->fetch() ) {
?>
<h3><?php echo $t['type_l']." : "; ?> <?php echo $t['nom_l']; ?></h3>
<?php
$f = $q->fetch();
?>

<p>enseignant:<?php echo $f['nom_e']."  "; ?> <?php echo $f['prenom_e'];

?></p>
<?php
if ($t['type_l']=="emphi") {
    $f = $q->fetch();
    ?>
    <p> 2eme enseignant:<?php echo $f['nom_e']."  ".$f['prenom_e']; ?>  
      
    </p>
  <?php
    }
  ?>
<table style="border:1px solid black;">
	<tr>
		<th>numero d'inscription</th>
				<th>nom</th>
                <th>prenom</th>
                <th>groupe</th>
                <th>section</th>
	</tr>

<?php
   $aa=$bd->query("SELECT * FROM `etudiant` INNER join groupe on groupe.idG = etudiant.idG INNER JOIN section on section.id_section = groupe.id_section INNER join niveau_de_formation on niveau_de_formation.id_n = '".$_GET['de']."' AND niveau_de_formation.id_n = section.id_n where  etudiant.id_l = '".$t['id_l']."' ");
   while ($g = $aa->fetch()) {
     ?>
     <tr>
     	<td><?php echo $g['num_ins']; ?></td>
     	<td><?php echo $g['nome']; ?></td>
     	<td><?php echo $g['prenome']; ?></td>
     	<td><?php echo $g['nomG']; ?></td>
     	<td><?php echo $g['nom_section']; ?></td>
     </tr>





     <?php

   }
   ?>
  </table>

   <?php
}


 ?>
   </div>
</div>
<script type="text/javascript" src="g.js"></script>
<script type="text/javascript" src="vb.js"></script>
</body>
</html>