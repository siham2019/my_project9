<?php
require_once 'model.php';

try {

 

    $stmt = $bd->query("DELETE FROM locaux where id_l=".$_GET['id']);


    if($stmt){

        header('Location: crud3s.php');
    }else{
        die('erreur de suppression.');
    }
}

// show error
catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}


?>
