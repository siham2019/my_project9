<?php
require_once 'model.php';

try {

 
    // delete query
    $query = "DELETE FROM enseignant where id_e=?";
    $stmte = $bd->prepare($query);
    $stmte->bindParam(1, $id);

    if($stmte->execute()){

        header('Location: crudEns.php');
    }else{
        die('erreur de suppression.');
    }
}

// show error
catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}


?>
