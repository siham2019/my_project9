
<?php
 require_once 'model.php';
if (isset($_GET['idn'])) {
    if (isset($_POST['s1'])) {
      $q=$bd->query("SELECT * FROM `module` INNER JOIN periode_examen on module.id_p=periode_examen.id_p WHERE `id_n`=
     '".$_GET['idn']."'");
while ($z=$q->fetch()) {
	$w=$bd->query("INSERT INTO `horaire_examen` (`id_h`, `date_h`, `heure_debut`, `heure_fin`)  VALUES (NULL,'".$z['date_p']."','".$z['heure_debut']."','".$z['heure_fin']."')");

$d=$bd->query("UPDATE `module` SET `id_h` = LAST_INSERT_ID() WHERE `module`.`id_module` = '".$z['id_module']."'");


}
  header('Location: voir.php?d='.$_GET['idn']);
    }
    else {
       
        header('Location: voir.php?d='.$_GET['idn']);
    }

}











?>
