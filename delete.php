<?php
require_once 'model.php';

try {
     
    $id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
 
    // delete query
    $query = "DELETE FROM etudiant where num_ins=?";
    $stmt = $bd->prepare($query);
    $stmt->bindParam(1, $id);
     
    if($stmt->execute()){
      
        header('Location: crud.php');
    }else{
        die('erreur de suppression.');
    }
}
 
// show error
catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}


?>