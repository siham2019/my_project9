<?php
try{
$bd=new PDO("mysql:host=localhost;dbname=gest_exam", "root","");

}catch(Exception $e){
    echo "<p>Caught exception: " . $e->getMessage() . "</p>";
}
?>

