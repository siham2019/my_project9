<?php
  require'model.php';

if (isset($_POST['request']))
{
  $res=$_POST['request'];
  if ($res==1) {
    $id=$_POST['id_nf'];
    $q=$bd->query("select * from section where id_n=".$id);
$arr= array();
while ($t=$q->fetch()) {

    $arr[]=array('ids'=> $t['id_section'],'noms'=> $t['nom_section']);

    }
    echo json_encode($arr);

}
//second ****************************************

if ($res==2) {
  $id=$_POST['id_section'];
  $q=$bd->query("select * from groupe where id_section=".$id);
$arr= array();
while ($t=$q->fetch()) {

  $arr[]=array('idg'=> $t['idG'],'nomg'=> $t['nomG']);

  }
  echo json_encode($arr);

}











}

?>
