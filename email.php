<?php

/*require_once 'model.php';*/
require 'tutorial1.php';

$qs = $bd->query("SELECT * FROM `horaire_examen` where `date_h`='".$_POST['id']."'");
  
         while ($qq = $qs->fetch()) {
            
            $dv = $bd->query("SELECT * FROM `effectuer` INNER JOIN locaux on effectuer.id_l=locaux.id_l inner join horaire_examen on effectuer.id_h=horaire_examen.id_h where effectuer.id_h=".$qq['id_h']." ORDER BY `effectuer`.`id_l` ASC");
            
           	 $dcv = $bd->query("SELECT * FROM `surveiller`  inner join enseignant on enseignant.id_e=surveiller.id_e  where `surveiller`.`id_h`=".$qq['id_h']);
            while ( $loc=$dv->fetch()) {
            

                 $zz=$dcv->fetch();
               
                 if ($loc['type_l']=="emphi") {
                 	

                     		emailMe($zz['email'],$_POST['id'],$loc['heure_debut'],$zz['nom_e'],$zz['prenom_e'],$loc['heure_fin'],$loc['nom_l']);
                   // echo " nom_e: ".$zz['id_e']." email: ".$zz['email']." <br>";
              	   $zz=$dcv->fetch();
                  //    echo "<br>2eme enseignant : ";
              	//      echo " nom_e: ".$zz['id_e']." email: ".$zz['email']." <br>";

              	  		emailMe($zz['email'],$_POST['id'],$loc['heure_debut'],$zz['nom_e'],$zz['prenom_e'],$loc['heure_fin'],$loc['nom_l']);

                  }
                else 
               {
             	emailMe($zz['email'],$_POST['id'],$loc['heure_debut'],$zz['nom_e'],$zz['prenom_e'],$loc['heure_fin'],$loc['nom_l']);

                }
            }
            
        }




?>