<?php
require'model.php'; 
   $arr = array();

if (isset($_GET['t'])) {
  $q=$bd->query("select * from groupe where id_section =".$_GET['id']);
  
         while ($t = $q->fetch()) {
  	      $arr[]=array('idG'=> $t['idG'],'nomG'=> $t['nomG']);
          
            }
  
}
 else 
  { 
   $q=$bd->query("select * from section where id_n =".$_GET['id']);
  
         while ($t = $q->fetch()) {
  	      $arr[]=array('ids'=> $t['id_section'],'noms'=> $t['nom_section']);
  
            }
  
  }


    echo json_encode($arr);


?>