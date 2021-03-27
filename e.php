<?php
/*
$room=array(1 => array("b",23),2 => array("a",60),3 => array("c",43),4 => array("d",13),5 => array("e",23),6 => array("f",73),7 => array("g",20));

$course=array(
	 1 => array("math","l1",23,"12:00:00","13:00:00")
	,2 => array("algo","l2",43,"12:00:00","13:30:00")
	,3 => array("prob","l3",43,"13:00:00","14:00:00")
	,4 => array("stat","M1",23,"13:00:00","14:00:00")
	,5 => array("se","M2",23,"14:30:00","16:00:00")
	,6 => array("stat","l1",90,"15:30:00","16:00:00")
); */
/* count($course);
 "<hr/>";
print_r ($course);
 "<hr/>";
print_r ($room);
 "<hr/>";*/
$n=array();
$da = array();
$xr=array();
$msg = array();
$s=array();
for ($i=0; $i <count($course) ; $i++) { //parcourir tableau course li 
  //fih module nombre des etudiants date d'examen heure de debut heure de fin
$t=true;
$j=0;//indice de salle
$xc =0;//indice de l'enseignant
if ($i!=0) {//hna course lowal mayfotch lakhtarch makach li 9ablo 
  //li da les enseignants et les salles 
	
	for ($k=$i; $k>0 ; $k--) { 
    //fa had bloc nkhayro les enseignant et les salles
    //bach nkhayro lazm nchofo ida les contraints yt7a9O
    // 1ere contraint:
    /*
         ida kan 3andna exam1(course) exam2 fa nafs nhar fa nafs sa3a
         wla sa3a(exam1) inclut sa3a(exam2) malazamch yado nafs enseignants wa salles
    */
         //condition 1 y9aran date ta3 exam2 m3a li 9ABLO
        if (strtotime($course[$i][5]) == strtotime($course[$k-1][5])) {
         		//condition2 y9aran m3a li 9ablo ida heure nafsha wla inclut
         		  if (strtotime($course[$i][3])==strtotime($course[$k-1][3]) || (strtotime($course[$i][3])<strtotime($course[$k-1][4]) && strtotime($course[$i][3])>strtotime($course[$k-1][3])) ){

             	          for ($f=0; $f <count($sol["room"][$k-1]) ; $f++) { 
                          /*
                             hna fa had bloc ychof les salles ida 
                             dahom li 9ablo 
                             $sol["room"][$k-1] 
                             fih les salles ta3 9ablo 
                          */
             	
                        		for ($d=0; $d <count($room) ; $d++) { 
             			             //hna yadi une salle man li 9ablo  wya9aranha m3a ga3 li salle kaynin
             			        	if ($room[$d][0]== $sol["room"][$k-1][$f]) {
                                     
          	        		            $j=$d+1;
                                      //hna ida daha li 9BLO ydi l'indice li ta3 la salle li manba3dha
          	        	               }

          	        
             		            }
                            /*
                          hna dart n wmadartch j bach na3raf 
                          3andman hbass j fi les courses li 9ablou
                            par ex li 9Ablo
                            exam1(course[1]) hbas j =5
                            exam2 hbas j= 2
                            exam3 hbas j= 3
                            aya wnado max ki tslak boucle ta3 indice k
                             lokan nkhali j hakak
                             rah yahbas 3and 3 
                           3 wa  moraha rahom mreserviyin
                             fa exam1 
                            */
             		      array_push($n,$j);
          	      
          	             }
                      //hna 3andha nafs principe m3a ta3 les salles 
                      for ($v=0; $v <count($sol["ens"][$k-1]) ; $v++){
                      for ($b=0; $b <count($ens) ; $b++) { 
                         if ($ens[$b] == $sol["ens"][$k-1][$v]) {
                                $xc =$b+1;
                             }
                     
                          }
                    }
                       array_push($xr,$xc);

             	}
        


	}
          	       if(count($n) >= 1)
          	       	{ 
          	       		$j=max($n);

          	       	}
          	       	   if(count($xr) >= 1)
          	       	{ 
          	       		$xc=max($xr);

          	       	}
          
   }       
        //nfargho array $n(indices de room)  splice dir return array fih les elements man indice 0 length 0 safi matadi hata wahad fihom
        $n = array_splice($n,0,0);
           //nafrgho $xc (indices des enseignants)
        $xr = array_splice($xr,0,0);

 }
//$c= nombre des etudiants fa course[i]
$c=$course[$i][2];

	while ($t) {
        //fi condition indice de room selectioné ydepasser longeur de room ma3antha rahom ga3 reservé makach salle vide
		 if ($j>=count($room) ) {
     //str msg d'erreur yaktablo chkon hiya l'heure li mat9darch tdi les salles wla maykfohach bach ybadlha
      $str = "modifier l'horaire de module ".$course[$i][6].", ".$course[$i][7]." - ".$course[$i][8]." (les salles ne sont pas suffisant) ";
 array_push($msg,array($course[$i][0],$str,$course[$i][9],$course[$i][6],$course[$i][3],$course[$i][5],$course[$i][1]));
           $s=array("0");
          $t=false;
         }
         //nafs chi m3a enseignant
          if ($xc>=count($ens) ) {
 
                  $str = "modifier l'horaire de module ".$course[$i][6].", ".$course[$i][7]." - ".$course[$i][8]." (les enseignants ne sont pas suffisant) ";
          array_push($msg,array($course[$i][0],$str,$course[$i][9],$course[$i][6],$course[$i][3],$course[$i][5],$course[$i][1]));
          $xr=array("0");
          $t=false;
         }
		
               if($t) {
             //hadi manich 3arfa 3lach dartha jani mafiha hata fayda zyada lakgtarch rahi hala man halat ta conditin zawja ta3 else
		      if ($j==0 && $c<=$room[$j][1]) {
		   
			     
				      array_push($s,$room[$j][0]);
				       array_push($xr,$ens[$xc]);
                   array_push($da,$room[$j][1]);

				     $t=false;
			      
		        }
		       else{
            //fi di condition za3ma ida kanat nbr etudiant kbira 3la salle ydiha wyna9as hata ylhag lhadak nbr 3La jalo dart while ($t) 
			         if ($c>$room[$j][1]) { 


		                    array_push($s,$room[$j][0]);
		                    array_push($xr,$ens[$xc]);
                            array_push($da,$room[$j][1]);
		                         $c-=$room[$j][1];

	                         }
	                 else
	                   {   
                      //howa ki ywali yna9ass ya taslak 3lih ba 0 ya < 0 3labiha darte di condition c >0 lakhtarch lokan madrthach meme ykon <=0 yadi salle wa hadi makaynach
                      if ($c>0) {
	                             if ($c<=$room[$j][1])
			                      {
				                    array_push($s,$room[$j][0]);
				                    array_push($xr,$ens[$xc]);
                                array_push($da,$room[$j][1]);
                        
			                      }
			                         $t=false;
	                   }
	        	          
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

if (count($msg)>0) {//hna ida kayan des erreurs (les salles ne sont pas suffisant...etc)
  for ($i=0; $i < count($msg); $i++) { 
    //yafficher chkon homa w lien ta3 modifier heure bach ybadalha
?>
<p style="color: red;display: inline;"><?php echo $msg[$i][1] ." "; ?></p>
 <a  style="color: blue;display: inline;text-decoration: underline;" href="modifier_ho.php?id=<?php echo  $msg[$i][2]; ?>&m=<?php echo  $msg[$i][3]; ?>&hd=<?php echo $msg[$i][4];?>&d=<?php echo $msg[$i][5];?>&de=<?php echo $msg[$i][6];?>"><i class="fa fa-edit"></i> modifier l'horaire</a>
 <br>
<?php
}

}
else{//ida makach les erreurs yafficher3amar les tableau fa bdd
  for ($i=0; $i <count($sol["room"]) ; $i++) { 
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
  //bon ani zayda table fa bdd glabt relation etudiant_locaux plusiers à plusieurs lakhtarch lokan nkhaliha un à plusieurs les etudiants yag3odo fi les memes salles tol semana ta3 examen ,fa algo ma3raftch ndirha  
  ?>

  <h1>Opération terminée avec succès</h1>
  <?php
  
}

?>