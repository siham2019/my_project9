<?php
function sortByLimit($a, $b) {
    return  $b[1]-$a[1] ;
}
$n=array();
$da = array();
$xr=array();
$msg = array();
$s=array();
$sol=array();
for ($i=0; $i <count($course) ; $i++) { 
$t=true;
$j=0;
$xc =0;
usort($ens, 'sortByLimit');
if ($i!=0) {
	
	     for ($d=0; $d <count($room) ; $d++){
          
       }

 }
//$c= nombre des etudiants fa course[i]
$c=$course[$i][5];

	while ($t) {
      
		 if ($j>=count($room) ) {
   
     /* $str = "modifier l'horaire de module ".$course[$i][6].", ".$course[$i][7]." - ".$course[$i][8]." (les salles ne sont pas suffisant) ";*/
  // array($t['id_module'],$t['id_n'],$w['c'],$t['heure_debut'],$t['heure_fin'],$t['date_h'],$t['nom_module'],$t['nom_n'],$t['specialité'],$t['id_h'])
     
 array_push($msg,array($course[$i][2],$str,$course[$i][0],$course[$i][6],$course[$i][1],$course[$i][9],$course[$i][1]));
           $s=array("0");
          $t=false;
         }
         //nafs chi m3a enseignant
          if ($xc>=count($ens) ) {
 
                /*  $str = "modifier l'horaire de module ".$course[$i][6].", ".$course[$i][7]." - ".$course[$i][8]." (les enseignants ne sont pas suffisant) ";*/
           array_push($msg,array($course[$i][2],$str,$course[$i][0],$course[$i][6],$course[$i][1],$course[$i][9],$course[$i][1]));
          $xr=array("0");
          $t=false;
         }
		
               if($t) {
       
			                   if ($c>$room[$j][1]) { 


		                          array_push($s,$room[$j][0]);
		                          array_push($xr,$ens[$xc][0]);
                              array_push($da,$room[$j][1]);
		                          $c-=$room[$j][1];

	                         }
	                 else
	                   {   
                
                      if ($c>0) {
	                             if ($c<=$room[$j][1])
			                          {
				                         array_push($s,$room[$j][0]);
				                          array_push($xr,$ens[$xc][0]);
                                  array_push($da,$room[$j][1]);
                        
			                          }
			                         $t=false;
	                       }
	        	          
	                    
                     }
	       
		            }
                // incrementation 3la jal ta3 condition ta3 c> salle bach yadi les salles et les enseignants lokhrin
		           $j++;

                   $xc++;

	         }

     //les salles li khayrhom yastokihom fa sol de room
	$sol["room"][$i]=$s;
  
     $sol["ens"][$i]= $xr;
         $sol["cap"][$i]= $da;
	 $s=array_splice($s,0,0);
       $xr=array_splice($xr,0,0);
         $da=array_splice($da,0,0);




 }
 echo "<br>";
echo "<br>";
print_r($sol);
if (count($msg)>0) {
  for ($i=0; $i < count($msg); $i++) { 
?>
<p style="color: red;display: inline;"><?php echo $msg[$i][1] ." "; ?></p>
 <a  style="color: blue;display: inline;text-decoration: underline;" href="modifier_ho.php?id=<?php echo  $msg[$i][2]; ?>&m=<?php echo  $msg[$i][3]; ?>&hd=<?php echo $msg[$i][4];?>&d=<?php echo $msg[$i][5];?>&de=<?php echo $msg[$i][6];?>"><i class="fa fa-edit"></i> modifier l'horaire</a>
 <br>
<?php
}

}
else{
 /* for ($i=0; $i <count($sol["room"]) ; $i++) { 
   for ($j=0; $j <count($sol["room"][$i]) ; $j++) 
   $sd = $bd->query("INSERT INTO `effectuer` (`id_h`, `id_l`) VALUES ('".$course[$i][9]."', '".$sol["room"][$i][$j]."')");
 $g = $bd->query("SELECT *  FROM `etudiant` INNER join groupe on groupe.idG = etudiant.idG INNER JOIN section on section.id_section = groupe.id_section INNER join niveau_de_formation on niveau_de_formation.id_n = '".$course[$i][1]."' AND niveau_de_formation.id_n = section.id_n");

  $j = 0;
   $cap = 1;
  while ($w = $g->fetch()) {
   if ($cap > $sol["cap"][$i][$j]) {
     $j++;
   $cap = 1;
   }
   $f= $bd->query("INSERT INTO `faire_examen` (`id_l`, `num_ins`) VALUES ('".$sol["room"][$i][$j]."', '".$w['num_ins']."')");
     $cap++;

  }
  }
   for ($i=0; $i <count($sol["ens"]) ; $i++) { 
   for ($j=0; $j <count($sol["ens"][$i]) ; $j++) 
   $sd = $bd->query("INSERT INTO `surveiller` (`id_e`, `id_h`) VALUES ('".$sol["ens"][$i][$j]."', '".$course[$i][9]."')");
  }
 */
  ?>

  <h1>Opération terminée avec succès</h1>
  <?php
  
}

?>