<?php
 /*function LimitqBy($a,$b)
{
  return $b[1] - $a[1];
}*/
$n=array();

$da = array();
$xr=array();
$msg = array();
$s=array();
$fg=array();
$sol=array();
$ensc=$ens;
for ($i=0; $i <count($course) ; $i++) { 
$t=true;
$j=0;
  $cv=0;
//$xc =0;
    //echo "<br>fog ta3 ensc= ";
       //print_r($ensc);
        //echo "<br>";
          //echo "<br>";
if ($i!=0) {

     
        //echo " <br>  ";
        //print_r($ens);
          //echo " <br>  ";
        //usort($ens,'LimitqBy');
      
	          
              for ($b=0; $b <count($ens) ; $b++) {
            /*    //echo " <br> b= $b ";
                //echo " <br> c= ".count($ens);
                   //echo "<br>qqq $b: ".$ens[$b][1]." <br>";*/
                     
                       if ($ens[$b][1]==3) {
                          
                          $fg[$cv]=array_splice($ens,$b,1);
                          $b--;
                          $cv++;
                       /*   //echo "<br>qqq  <br>";
                          //print_r($fg);*/
                       }
            }
         
            $ensc=$ens;
/*             //echo "<br> enseig = ";
              //print_r($fg);
              //echo "<br>";*/
	         for ($k=$i; $k>0 ; $k--) { 
    
         
               		  if (strtotime($course[$i][1])==strtotime($course[$k-1][1]) || (strtotime($course[$i][1])<strtotime($course[$k-1][2]) && strtotime($course[$i][1])>strtotime($course[$k-1][1])) ){
                     
             	             for ($f=0; $f <count($sol["room"][$k-1]) ; $f++) { 
                     
             	
                        	     	for ($d=0; $d <count($room) ; $d++) { 
             			           
             			        	      if ($room[$d][0]== $sol["room"][$k-1][$f]) {
                                     
          	        		               $j=$d+1;
                                     
          	        	               }

          	        
             		                }
                           
             		               array_push($n,$j);
          	      
          	             }
                    
                      for ($v=0; $v <count($sol["ens"][$k-1]) ; $v++){
                     
                           for ($b=0; $b <count($ensc) ; $b++) { 
                               
                               if ($ensc[$b][0] == $sol["ens"][$k-1][$v]) {
                               
                                   array_splice($ensc,$b,1);
                                 
                                 
                                 }
                     
                             }
                       }

                     //array_push($xr,$xc);

             	}
        


	      }
          	       if(count($n) >= 1)
          	       	{ 
          	       		$j=max($n);

          	       	}
          	       	 /*  if(count($xr) >= 1)
          	       	{ 
          	       		$xc=max($xr);

          	       	}*/
          
         
         ////echo "<br> xc de boucle=".$xc." <br>";
        $n = array_splice($n,0,0);
        /*$xr = array_splice($xr,0,0);*/
        /*if ($xc!=0 && $ens[$xc][0]==$course[$i][4]) {
      
        }*/
         ////echo "<br> ens= ";
         ////print_r($ens);
         ////echo "<br><br>";
             
               
                 /* for ($b=0; $b <count($ensc) ; $b++) {
                      
                       if ($ensc[$b][0]==$course[$i][4] ) {
                        array_splice($ensc,$b,1);
                       }
                      
                    }*/
               
         
      
         ////echo "<br> xc=".$xc." <br>";
         ////print_r($ensc);
            ////echo "<br>";

 }
//$c= nombre des etudiants fa course[i]
$c=$course[$i][5];
$xc=0;
	while ($t) {
      
		 if ($j>=count($room) ) {


      $str = "modifier l'horaire de module ".$course[$i][6].", ".$course[$i][7]." - ".$course[$i][8]." (les salles ne sont pas suffisant) ";

  // array($t['id_module'],$t['id_n'],$w['c'],$t['heure_debut'],$t['heure_fin'],$t['date_h'],$t['nom_module'],$t['nom_n'],$t['specialité'],$t['id_h'])
     
 array_push($msg,array($course[$i][2],$str,$course[$i][0],$course[$i][6],$course[$i][1],$course[$i][9],$course[$i][1]));
           $s=array("0");
          $t=false;
            break;
         }
         //nafs chi m3a enseignant
          if ($xc>=count($ensc) ) {
 
                  $str = "modifier l'horaire de module ".$course[$i][6].", ".$course[$i][7]." - ".$course[$i][8]." (les enseignants ne sont pas suffisant) ";
           array_push($msg,array($course[$i][2],$str,$course[$i][0],$course[$i][6],$course[$i][1],$course[$i][9],$course[$i][1]));
          $xr=array("0");
          $t=false;
          break;
         }
		
             
       
			                   if ($c>$room[$j][1]) { 
                              if ($room[$j][2]=="emphi") {
                               array_push($xr,$ensc[$xc][0]);
                              $ensc[$xc][1]++;
                              $xc++;
                              if ($xc<count($ensc)) {
                                 array_push($xr,$ensc[$xc][0]);
                              $ensc[$xc][1]++;
                              }
                             
                              }
                             else{
                                array_push($xr,$ensc[$xc][0]);
                                $ensc[$xc][1]++;
                             }
		                          array_push($s,$room[$j][0]);
		                          
                              array_push($da,$room[$j][1]);
		                          $c-=$room[$j][1];
                            /* //echo "<br> ".$room[$j][1]." df $c ";*/

	                         }
	                 else
	                   {   
                
                      if ($c>0) {
	                             if ($c<=$room[$j][1])
			                          {
				                         array_push($s,$room[$j][0]);
				                         if ($room[$j][2]=="emphi") {
                                      array_push($xr,$ensc[$xc][0]);
                                        $ensc[$xc][1]++;
                                          $xc++;
                                      if ($xc<count($ensc)) {
                                       array_push($xr,$ensc[$xc][0]);
                                       //echo "dfg $xc";
                                        $ensc[$xc][1]++;
                                          }
                                      else
                                        continue;
                             
                                  }
                               else{
                                   array_push($xr,$ensc[$xc][0]);
                                   $ensc[$xc][1]++;
                                 }
                                   array_push($da,$room[$j][1]);
                        
			                        }
			                         $t=false;

	                       }
	        	          
	                    
                     }
	       
		            /* //echo "<br> cap= $c <br>";*/
                // incrementation 3la jal ta3 condition ta3 c> salle bach yadi les salles et les enseignants lokhrin
                //echo "<br> ".$ensc[$xc][0]."limite_horaire : ".$ensc[$xc][1]." <br>";
		           $j++;
                   $xc++;
	         }
           //echo "<br>ensc= ";

      //print_r($ensc);
        //echo "<br>";
          //echo "<br>";
     //les salles li khayrhom yastokihom fa sol de room
	$sol["room"][$i]=$s;
  
     $sol["ens"][$i]= $xr;
 
         $sol["cap"][$i]= $da;
	 $s=array_splice($s,0,0);
       $xr=array_splice($xr,0,0);
         $da=array_splice($da,0,0);
          for ($bn=0; $bn <count($ens) ; $bn++) {
          for ($ff=0; $ff <count($ensc) ; $ff++) { 
            
             if ($ensc[$ff][0]==$ens[$bn][0]) {
             
                 /*  //echo "ensei : ".$ensc[$ff][0]."<br>";*/
                    $ens[$bn][1]=$ensc[$ff][1];
                     /*//echo "l : ".$ens[$bn][1]."<br>";*/
                   }  
           } 
                
        }
        //echo "<br>";
             //echo "<br>taht ens= ";
       //print_r($ens);
        //echo "<br>";
          //echo "<br>";
 }
 //echo "<br>";
/*echo "<br>";
print_r($sol);*/
/*     //echo "<br> enseignants = ";
              //print_r($ens);
              //echo "<br>";*/
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
  for ($i=0; $i <count($sol["room"]) ; $i++) { 
   for ($j=0; $j <count($sol["room"][$i]) ; $j++) 
   $sd = $bd->query("INSERT INTO `effectuer` (`id_h`, `id_l`) VALUES ('".$course[$i][0]."', '".$sol["room"][$i][$j]."')");
 $g = $bd->query("SELECT *  FROM `etudiant` INNER join groupe on groupe.idG = etudiant.idG INNER JOIN section on section.id_section = groupe.id_section INNER join niveau_de_formation on niveau_de_formation.id_n = '".$course[$i][10]."' AND niveau_de_formation.id_n = section.id_n");

  $j = 0;
   $cap = 1;
  while ($w = $g->fetch()) {
   if ($cap > $sol["cap"][$i][$j]) {
     $j++;
   $cap = 1;
   }
    $bd->query("UPDATE `etudiant` SET `id_l`='".$sol["room"][$i][$j]."'WHERE `etudiant`.`num_ins`=".$w['num_ins']);
 
     $cap++;

  }
  }
  for ($i=0; $i <count($ens) ; $i++) {
    //echo "<br> UPDATE `enseignant` SET limite_horaire=".$ens[$i][1]." where id_e='".$ens[$i][0]."' <br>";
   $bd->query("UPDATE `enseignant` SET limite_horaire=".$ens[$i][1]." where id_e='".$ens[$i][0]."'"); 
    }
    for ($i=0; $i <count($fg) ; $i++) {
      //echo "<hr> <br> UPDATE `enseignant` SET limite_horaire=".$fg[$i][0][1]." where id_e='".$fg[$i][0][0]."' <br>";
     $bd->query("UPDATE `enseignant` SET limite_horaire=".$fg[$i][0][1]." where id_e='".$fg[$i][0][0]."'"); 
    }
   for ($i=0; $i <count($sol["ens"]) ; $i++) { 
   for ($j=0; $j <count($sol["ens"][$i]) ; $j++) 
    $bd->query("INSERT INTO `surveiller` (`id_e`, `id_h`) VALUES ('".$sol["ens"][$i][$j]."', '".$course[$i][0]."')");
  }
 
  ?>

  <h1>Opération terminée avec succès</h1>
  <?php
  require 'email.php';
}

?>