<?php
require_once 'model.php';

try {

     $q1=$bd->query("UPDATE `module` SET `id_h` = '0' WHERE `module`.`id_module`= '".$_GET['idm']."'");


       require 'delete_sap.php';
    

        header('Location: voir.php?d='.$_GET['d']);
   
}

// show error
catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}


?>
