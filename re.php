<!DOCTYPE html>
<html>

<head>
  <title>auto-affecter</title>
  <link rel="stylesheet" type="text/css" href="pA.css">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
   <style>
   .io{
    color: black;
     }
     .io > a{
      text-decoration: underline;
      color: blue;
     }
   </style> 
</head>

<body>
	<?php  require_once 'model.php'; 
 	  ?>
      <div class="hi">
         <?php require_once 'dash.php'; ?>
       <div class="fp">

            <div class="io">
              <a href="emploi_v1.php" >liste de planning</a>
          <?php

      if (isset($_POST['id'])) {
         $course=array();
      $i=0;
      $res=array();
          $qs = $bd->query("SELECT * FROM `horaire_examen` where `date_h`='".$_POST['id']."' ORDER BY `horaire_examen`.`heure_debut`  ASC");
         while ($qq = $qs->fetch()) {
              $tts = $bd->query("SELECT * FROM `module` where `id_h`=".$qq['id_h']);
              $r= $tts->fetch();
             $g = $bd->query("SELECT specialité,nom_n,count(*) AS c FROM `etudiant` INNER join groupe on groupe.idG = etudiant.idG INNER JOIN section on section.id_section = groupe.id_section INNER join niveau_de_formation on niveau_de_formation.id_n = '".$r['id_n']."' AND niveau_de_formation.id_n = section.id_n");
             $w = $g->fetch(); 
              if ( $tts->rowCount() != 0 && $w['c'] != 0) 
              {
                //echo "<br>deddfdfdf<br>";
              $course[$i]=array($qq['id_h'],$qq['heure_debut'],$qq['heure_fin'],$r['id_module'],$r['id_e'],$w['c'],$r['nom_module'],$w['nom_n'],$w['specialité'],$_POST['id'],$r['id_n']);
              $res[$i]=$r['id_e'];
              $i++;}
           }
          
           if ($res) {
            $rs=implode("','",$res);
             require 'u.php';
           }else{?>
            <h1>vous ne pouvez pas faire cette operation verifier ou  ajouter d'abord les ressources (les salles ,enseignants,etudiants,responsables de modules)</h1>
           <?php 
         }
          
      }



      ?>
          </div>
          </div>
        </div>
     
</body>
</html>