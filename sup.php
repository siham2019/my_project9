
<?php
 require_once 'model.php';
if (isset($_GET['id'])) {

      $q=$bd->query("SELECT * FROM `module` INNER JOIN horaire_examen on module.id_h=horaire_examen.id_h WHERE `id_n`=
     '".$_GET['id']."'");
while ($z=$q->fetch()) {

$d=$bd->query("UPDATE `module` SET `id_h` = 0 WHERE `module`.`id_module` = '".$z['id_module']."'");
$w=$bd->query("DELETE FROM `horaire_examen` WHERE `horaire_examen`.`id_h` = '".$z['id_h']."'");

}
  header('Location: emploi.php');
    }


?>
