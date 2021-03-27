<?php

require_once 'model.php';

 $q=$bd->query("SELECT `id_p` FROM `module` WHERE `id_n`=
 ".$_GET['idn']);
while ($z=$q->fetch()) {
    $bd->query("UPDATE `module` SET `id_p`=NULL WHERE `id_p`=
 ".$z['id_p']);
    $bd->query("DELETE FROM `periode_examen` WHERE `id_p`=
    ".$z['id_p']);
    echo "DELETE FROM `periode_examen` WHERE `id_p`=
    ".$z['id_p'];
 
}

header('Location: proposer.php?ide='.$_GET['ide']);

?>